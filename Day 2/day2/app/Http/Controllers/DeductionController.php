<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function deduction(){
        return view('deduction');
    }
    public function deductionCreate(){
        return view('create_form.deduction');
    }
}
