<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        return view('products');
    }
    public function productsCreate(){
        return view('create_from.products');
    }
}
