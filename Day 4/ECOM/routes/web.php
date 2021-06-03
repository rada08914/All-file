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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[
    App\Http\Controllers\ProductsController::class,
    'products'

]);
Route::get('/categories',[
    App\Http\Controllers\CategoriesController::class,
    'categories'

]);
Route::get('/orders',[
    App\Http\Controllers\OrdersController::class,
    'orders'

]);
Route::get('/customers',[
    App\Http\Controllers\CustomersController::class,
    'customers'

]);
Route::get('/products/create',[
    App\Http\Controllers\ProductsController::class,
    'productsCreate'

]);
Route::get('/categories/create',[
    App\Http\Controllers\CategoriesController::class,
    'categoriesCreate'

]);
Route::get('/orders/create',[
    App\Http\Controllers\OrdersController::class,
    'ordersCreate'

]);
Route::get('/customers/create',[
    App\Http\Controllers\CustomersController::class,
    'customersCreate'

]);
