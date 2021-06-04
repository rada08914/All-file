<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Storage;
use App\Models\User;


class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }

    Public function index(){
      
        return view('index');
    }
     Public function login(){
    
        return view('login');
    }
    Public function login_verify(){
        
        return view('login_verify');
    }
    Public function registration(){
        
        return view('registration');
    }
    Public function registration_verify(){
        
      $filename= Storage::disk('public')->putFile('avatar',$this->request->file);
    //    dd($filename);
    $this->request->merge([
        'avatar' => $filename,
        'password'=>bcrypt($this->request->password)

    ]);
    User::create(
            $this->request->except('file','_token')
    );
    return Redirect::route('app');
       
    }
}
