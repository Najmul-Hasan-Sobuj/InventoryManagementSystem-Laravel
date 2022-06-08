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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('dashboard');
Route::resource('employee', App\Http\Controllers\EmployeeController::class);
Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::resource('supplier', App\Http\Controllers\SupplierController::class);
Route::resource('salary', App\Http\Controllers\SalaryController::class);
