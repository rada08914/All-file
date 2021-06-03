<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;


Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'

])->name('home');;
Route::post('/department/save',[
    App\Http\Controllers\DepartmentController::class,
    'save'
])->name('save');
Route::get('/department/delete',[
    App\Http\Controllers\DepartmentController::class,
    'delete'
])->name('delete');