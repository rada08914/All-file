<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/',[
    App\Http\Controllers\AuthController::class,
    'index'
])->name('app');

route::get('/login',[
    App\Http\Controllers\AuthController::class,
    'login'
])->name('app.login');

route::get('/login/verify',[
    App\Http\Controllers\AuthController::class,
    'login_verify'
])->name('app.login.verify');

route::get('/registration',[
    App\Http\Controllers\AuthController::class,
    'registration'
])->name('app.registration');

route::post('/registration/verify',[
    App\Http\Controllers\AuthController::class,
    'registration_verify'
])->name('app.registration.verify');