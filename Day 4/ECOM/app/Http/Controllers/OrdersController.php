<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders(){
        return view('orders');
    }
    public function ordersCreate(){
        return view('create_from.orders');
    }
}
