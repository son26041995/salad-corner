<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;

class ProductServices
{
    public function getListProducts()
    {
        $products = DB::table('products')->get();
        // dd($products);
        $productBreakFasts = $products->filter(function ($value, $key) {
            return $value->product_type_schedule == 0;
        });

        $productLunchs = $products->filter(function ($value, $key) {
            return $value->product_type_schedule == 1;
        });

        $productDinners = $products->filter(function ($value, $key) {
            return $value->product_type_schedule == 3;
        });

        return ["all" => $products, "productLunchs" => $productLunchs, "productDinners" => $productDinners, "productBreakFasts" => $productBreakFasts];
    }
}