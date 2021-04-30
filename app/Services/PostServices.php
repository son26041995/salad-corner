<?php
namespace App\Services;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class PostServices
{
    public static $TRANSACTION_STATUS = [
        'member_create_transaction_order' => 0,
        'author_confirm_order' => 1,
        'author_tranfer_money_admin' => 2,
        'order_success' => 3,
        'order_failed' => 4

    ];
    public function getListPosts()
    {
        $products = DB::table('posts as p')
            ->select('p.id as postId', 'p.*', 'u.*')
            ->leftjoin('users as u', 'u.id', '=', 'p.user_id')
            ->where('p.is_deleted', 0)
            ->orderBy('p.created_at', 'desc')
            ->paginate(100);

        return $products;
    }

    public function getPostMoreLikeThis()
    {
        $products = DB::table('posts as p')
            ->select('p.id as postId', 'p.*', 'u.*')
            ->leftjoin('users as u', 'u.id', '=', 'p.user_id')
            ->where('p.is_deleted', 0)
            ->inRandomOrder()
            ->paginate(10);

        return $products;
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')
            ->select('posts.*', 'u.name', 'u.zalo')
            ->leftjoin('users as u', 'u.id', '=', 'posts.user_id')
            ->where('posts.id', $id)->first();
        $detailLinkProducs = DB::table('post_product_links')
            ->leftjoin('posts', 'posts.id', '=', 'post_product_links.post_id')
            ->where('post_product_links.post_id', $id)->get();
        $shopeeNickList = DB::table('shopee_nick_list')->where('user_id', Auth::id())->get();
        return ['post' => $post, 'links' => $detailLinkProducs, 'shopeeNickList' => $shopeeNickList];
    }

    public function processMemberCreateNewTransactionOrder($postId, $shopeeLink)
    {
        DB::table('transactions_order')->insert(
            [   'post_id' => $postId,
                'user_id' => Auth::id(),
                'transaction_status' => self::$TRANSACTION_STATUS['member_create_transaction_order'],
                'shopee_link' => $shopeeLink,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        return;
    }

    public function processCreateNewPost($data)
    {
        DB::beginTransaction();

        try {
            $id = DB::table('posts')->insertGetId(
                [   'content' => $data['content'],
                    'user_id' => Auth::id(),
                    'title' => $data['title'],
                    'status' => 1,
                    'number_order' => $data['numberOrder'],
                    'number_order_remaining' => $data['numberOrder'],
                    'coin_pay' => $data['coinPay'],
                    'requirement_payment' => $data['requirementPayment'],
                    'is_apply_freeship' => $data['isApplyFreeship'],
                    'image' => $data['image'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()]
            );

            $productData = json_decode($data['productData']);
            $dataInserts = [];

            foreach ($productData as $key => $prd) {
                $dataInserts[] = [  'post_id' => $id,
                                    'url' => $prd->productLink,
                                    'number' => $prd->qty,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now()
                                ];
            }
            DB::table('post_product_links')->insert($dataInserts);

            $user = DB::table('users')->where('id', Auth::id())->first();
            $currentCoin = $user->point;
            $coinUpdate = $currentCoin - ($data['coinPay'] * $data['numberOrder']);
            DB::table('users')->where('id', Auth::id())->update(['point' => $coinUpdate]);

            DB::commit();
            return;
        } catch (\Exception $e) {
            DB::rollback();
            return;
            // something went wrong
        }
    }

    public function processEditPost($data, $id)
    {
        if (DB::table('posts')->where('id', $id)->first()->user_id !== Auth::id()) return;
        DB::beginTransaction();

        $dataUpdate = [ 'content' => $data['content'],
                        'user_id' => Auth::id(),
                        'title' => $data['title'],
                        'status' => 1,
                        'requirement_payment' => $data['requirementPayment'],
                        'is_apply_freeship' => $data['isApplyFreeship'],
                        'updated_at' => Carbon::now()];
        if (isset($data['image'])) {
            $dataUpdate['image'] = $data['image'];
        }

        try {
            DB::table('posts')->where('id', $id)->update($dataUpdate);

            DB::table('post_product_links')->where('post_id', $id)->delete();
            $productData = json_decode($data['productData']);
            $dataInserts = [];

            foreach ($productData as $key => $data) {
                $dataInserts[] = [  'post_id' => $id,
                                    'url' => $data->productLink,
                                    'number' => $data->qty,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now()
                                ];
            }
            DB::table('post_product_links')->insert($dataInserts);
            DB::commit();
            return;
        } catch (\Exception $e) {
            DB::rollback();
            return;
            // something went wrong
        }
    }

    public function processDeletePost($id)
    {
        DB::table('posts')->where('id', $id)->update(['is_deleted' => 1]);
        return ;
    }
}