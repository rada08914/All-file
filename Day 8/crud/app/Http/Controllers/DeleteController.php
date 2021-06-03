<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;
use Redirect;
class DeleteController extends Controller
{
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }

   
    public function delete($id){

        Personel::find($id)->delete();
        return Redirect::route('home');
     }
}
