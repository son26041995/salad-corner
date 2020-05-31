<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductServices;

class HomeController extends Controller
{
    public function __construct(
        ProductServices $productServices
    ) {
        $this->productServices = $productServices;
    }

    public function index ()
    {
        $products = DB::table('products')->get();
        return view('home.home', ['products' => $products]);
    }
}
