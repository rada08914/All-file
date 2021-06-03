<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department(){
        return view('department');
    }
    public function departmentCreate(){
        return view('create_form.departments');
    }
}
