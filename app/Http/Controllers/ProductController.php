<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductServices;

class ProductController extends Controller
{
    public function __construct(
        ProductServices $productServices
    ) {
        $this->productServices = $productServices;
    }

    public function getProductDetail (Request $request)
    {
        $product = $this->productServices->getProductById($request->id);

        if (!$product) {
          return abort(404);
        }

        return view('product.product_detail', ['product' => $product]);
    }
}
