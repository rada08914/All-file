<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [
    App\Http\Controllers\IndexController::class,
    'index'
])->name('home');

Route::get('/create', [
    App\Http\Controllers\CreateController::class,
    'create'

])->name('create');

Route::post('/create/save', [
    App\Http\Controllers\CreateController::class,
    'save'

])->name('save');

Route::get('/update/{id}', [
    App\Http\Controllers\UpdateController::class,
    'index'

])->name('update');

Route::post('/update/{id}/save', [
    App\Http\Controllers\UpdateController::class,
    'updatesave'
])->name('update.save');


Route::get('/delete/{id}', [
    App\Http\Controllers\DeleteController::class,
    'delete'
])->name('delete');