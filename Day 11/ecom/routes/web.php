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



Route::get('/',[
    App\Http\Controllers\ProductController::class,
    'index'
])->name('home');
Route::get('/create',[
    App\Http\Controllers\ProductController::class,
    'create'
])->name('create');
Route::post('/createsave',[
    App\Http\Controllers\ProductController::class,
    'createsave'
])->name('create.save');
Route::get('/update/{id}',[
    App\Http\Controllers\ProductController::class,
    'update'
])->name('update');
Route::post('/update/{id}/save',[
    App\Http\Controllers\ProductController::class,
    'updatesave'
])->name('update.save');
Route::get('/delete/{id}',[
    App\Http\Controllers\ProductController::class,
    'delete'
])->name('delete');