<?php

namespace App\Services;

use DB;

class ProductServices
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function getListProductByScheduled($arraySchedule)
    {
        $products = DB::table('products')->whereIn('schedule_type', $arraySchedule)->get();

        return $products;
    }

    public function getListProductByType($arrayPrdType)
    {
        $products = DB::table('products')->whereIn('product_type', $arrayPrdType)->get();

        return $products;
    }

    public function getAllProducts()
    {
        $products = DB::table('products')->get();

        return $products;
    }

    public function getProductById($id)
    {
        if (is_null($id)) return false;

        $product = DB::table('products')->where("id", $id)->first();
        return $product;
    }
}
