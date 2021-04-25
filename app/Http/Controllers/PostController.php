<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // dd($data);
        return view('posts.post_detail', ['post' => $data['post'], 'links' => $data['links'], 'shopeeNickList' => $data['shopeeNickList']]);
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
        $image = $request->file('thumbnail');
        $filePath = uploadThumbnailPost($image);
        $data = $request->all();
        $data['image'] = $filePath;
        $this->postServices->processCreateNewPost($data);
    }

    public function memberSubmitOrder(Request $request)
    {
        $postId = $request->id;
        $shopeeLink = $request->shopee_link;
        $this->postServices->processMemberCreateNewTransactionOrder($postId, $shopeeLink);
        return redirect('/self/order')->with('status', 'Đăng kí đặt đơn thành công!');
    }
}
