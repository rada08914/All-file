<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        return view('settings');
    }
    public function settingsCreate(){
        return view('create_form.settings');
    }
}
