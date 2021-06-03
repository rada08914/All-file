<?php

namespace App\Http\Controllers;
use Redirect;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }

    public function department(){

        return view('department')->with([
            'data' => Department::all()
        ]);
    }
    public function save(){

        Department::create(
            $this->request->except('_token')
        );
        return Redirect::route('home');
    }
    public function delete(){

        
       
    }
}
