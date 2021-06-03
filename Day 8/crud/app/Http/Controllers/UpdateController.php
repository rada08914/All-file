<?php

namespace App\Http\Controllers;
use App\Models\Personel;
use Illuminate\Http\Request;
use Redirect;

class UpdateController extends Controller
{
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }
    
    public function index($id){
        return view('update')->with([
            'data' => Personel::find($id)
        ]);
    }

    public function updatesave($id){

       Personel::find($id)->update(

        $this->request->except('_token')
       );
       return Redirect::route('home');
    }
}
