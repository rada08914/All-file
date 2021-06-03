<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Redirect;
use Carbon\Carbon;

class ProductController extends Controller
{
    protected $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    public function index(){
        $data= Product::all();
        if($this->request->has('search')){
            $data = Product::where(
                $this->request->by,
                '=',
                $this->request->search
            )->get();
        }
        // if($this->request->has('number1')){
        //     $data = Product::whereBetween('price',[
        //         $this->request->price1,
        //         $this->request->price2,
        //     ])->get();

        // }
        if($this->request->has('number1')){
            $data = Product::whereBetween('rating',[
                $this->request->number1,
                $this->request->number2,
            ])->get();

        }
        if($this->request->has('price1')){
            $data = Product::where('price','>=',$this->request->price1)
                         ->where('price','<=',$this->request->price2)
                         ->get();

        }

        return view('index')->with([
            'data' => $data
        ]);
    }
    public function create(){

        return view('create');
    }
    public function createsave(){

        Product::create(
            $this->request->except('_token')
        );

        return Redirect::route('home');
    }
    public function update($id){

        return view('update')->with([
            'data' => Product::find($id)
        ]);
    }
    public function updatesave($id){
        Product::find($id)->update(

            $this->request->except('_token')
           );
           return Redirect::route('home');
        
    }

    public function delete($id){

        Product::find($id)->delete();
        return Redirect::route('home');
     }

}
