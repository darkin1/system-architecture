<?php

namespace App\Http\Controllers;

use App\Product;

class ProductsController extends Controller
{
    public function write() {
        $product = new Product(['name'=>'SAMSUNG X10', 'type'=>'tv']);
        $product->save();

        return response('write');
    }

    public function read() {
        // wstawić var_dump($database, $type); 
        // w pliku vendor/laravel/framework/src/Illuminate/Database/DatabaseManager.php
        // w lini 78
        // \DB::connection('mysql::read')->select('select * from products');

        // wstawić var_dump($hosts);
        // w pliku vendor/laravel/framework/src/Illuminate/Database/Connectors/ConnectionFactory.php
        // w lini 201
        $products = Product::all();

        return response($products->last());
    }
}
