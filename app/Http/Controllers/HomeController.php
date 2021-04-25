<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostServices;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostServices $postServices)
    {
        $this->middleware('auth');
        $this->postServices = $postServices;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = $this->postServices->getListPosts();

        return view('home.home', ['posts' => $posts]);
    }

    public function testapi()
    {
        dd("aaa");
    }
}
