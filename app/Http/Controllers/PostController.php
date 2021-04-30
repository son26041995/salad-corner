<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Services\PostServices;

class PostController extends Controller
{
    public function __construct(
        PostServices $postServices
    ) {
        $this->postServices = $postServices;
    }

    public function detail (Request $request)
    {
        $postId = $request->id;
        $data = $this->postServices->getPostById($postId);
        $postMoreLikeThis = $this->postServices->getPostMoreLikeThis();
        return view('posts.post_detail',
            [   'post' => $data['post'],
                'links' => $data['links'],
                'shopeeNickList' => $data['shopeeNickList'],
                'postMoreLikeThis' => $postMoreLikeThis
            ]);
    }

    public function create (Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'numberOrder' => 'required|integer|min:1',
            'coinPay' => 'required|integer|min:5',
            'requirementPayment' => 'required|integer',
            'isApplyFreeship' => 'required|integer',
            'thumbnail' => 'required',
            'productData' => 'required'
        ]);

        if (!is_array($validated) && $validated->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }

        $currentUser = DB::table('users')->where('id', Auth::id())->first();
        if ($currentUser->point < $request->coinPay * $request->numberOrder) return 'not enough point';

        $image = $request->file('thumbnail');
        $filePath = uploadThumbnailPost($image);
        $data = $request->all();
        $data['image'] = $filePath;
        $this->postServices->processCreateNewPost($data);
    }

    public function edit (Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'requirementPayment' => 'required|integer',
            'isApplyFreeship' => 'required|integer',
            'productData' => 'required'
        ]);

        if (!is_array($validated) && $validated->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }

        $currentUser = DB::table('users')->where('id', Auth::id())->first();
        if ($currentUser->point < $request->coinPay) return 'not enough point';

        $data = $request->all();
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $filePath = uploadThumbnailPost($image);
            $data['image'] = $filePath;
        }

        $this->postServices->processEditPost($data, $request->id);
        return 1;
    }

    public function delete(request $request)
    {
        $this->postServices->processDeletePost($request->id);
        return 1;
    }

    public function memberSubmitOrder(Request $request)
    {
        $postId = $request->id;
        $shopeeLink = $request->shopee_link;
        $this->postServices->processMemberCreateNewTransactionOrder($postId, $shopeeLink);
        return redirect('/self/order')->with('status', 'Đăng kí đặt đơn thành công!');
    }
}
