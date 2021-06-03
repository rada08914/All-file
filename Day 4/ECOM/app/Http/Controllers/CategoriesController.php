<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(){
        return view('categories');
    }
    public function categoriesCreate(){
        return view('create_from.categories');
    }
}
