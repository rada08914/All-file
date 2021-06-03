<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimekeepingController extends Controller
{
    public function timekeeping(){
        return view('timekeeping');
    }
    public function timekeepingCreate(){
        return view('create_form.timekeeping');
    }
}
