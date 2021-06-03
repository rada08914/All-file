<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[
    App\Http\Controllers\LoginController::class,
    'index'
]);
Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'
]);
Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
]);
Route::get('/deduction',[
    App\Http\Controllers\DeductionController::class,
    'deduction'
]);
Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
]);
Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
]);
Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);
Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
]);
Route::get('/payslips',[
    App\Http\Controllers\PayslipsController::class,
    'payslips'
]);
Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
]);
Route::get('/settings',[
    App\Http\Controllers\SettingsController::class,
    'settings'
]);
Route::get('/form',[
    App\Http\Controllers\DepartmentController::class,
    'form'
]);
Route::get('/department/create',[
    App\Http\Controllers\DepartmentController::class,
    'departmentCreate'
]);
Route::get('/deduction/create',[
    App\Http\Controllers\DeductionController::class,
    'deductionCreate'
]);
Route::get('/employees/create',[
    App\Http\Controllers\EmployeesController::class,
    'employeesCreate'
]);
Route::get('/leaves/create',[
    App\Http\Controllers\LeavesController::class,
    'leavesCreate'
]);
Route::get('/loans/create',[
    App\Http\Controllers\LoansController::class,
    'loansCreate'
]);
Route::get('/payslips/create',[
    App\Http\Controllers\PayslipsController::class,
    'payslipsCreate'
]);
Route::get('/settings/create',[
    App\Http\Controllers\SettingsController::class,
    'settingsCreate'
]);
Route::get('/timekeeping/create',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeepingCreate'
]);







