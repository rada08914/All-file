<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use Redirect;


class CreateController extends Controller
{  
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }

    public function create(){
        return view('create');
    }
    public function save(){
        Personel::create(
            $this->request->except('_token')
        );

        return Redirect::route('home');
    }
}
