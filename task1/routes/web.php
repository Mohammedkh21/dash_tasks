<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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



Route::get('register',[Controllers\UserController::class,'RegisterPage'])->name('Route_register');
Route::get('login',[Controllers\UserController::class,'LoginPage'])->name('Route_login');
Route::get('forgerPassword',[Controllers\UserController::class,'ForgerPasswordPage'])->name('Route_forgetPassword');




Route::post('registerAccount',[Controllers\UserController::class,'Register'])->name('account_register');
Route::post('loginAccount',[Controllers\UserController::class,'Login'])->name('account_login');
Route::post('forgerPasswordAccount',[Controllers\UserController::class,'Forget_password'])->name('account_forgetPassword');



















