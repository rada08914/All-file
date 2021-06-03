<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function loans(){
        return view('loans');
    }
    public function loansCreate(){
        return view('create_form.loans');
    }
}
