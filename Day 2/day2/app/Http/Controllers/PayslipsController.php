<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipsController extends Controller
{
    public function payslips(){
        return view('payslips');
    }
    public function payslipsCreate(){
        return view('create_form.payslips');
    }
}
