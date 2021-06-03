<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(){
        return view('customers');
    }
    public function customersCreate(){
        return view('create_from.customers');
    }
}
