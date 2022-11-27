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


Route::group(['middleware'=>['authh','verifyUser']],function (){
    Route::get('/', function () {
        return view('welcome');
    });
});


Route::get('register',[Controllers\UserController::class,'RegisterPage'])->name('Route_register');
Route::get('login',[Controllers\UserController::class,'LoginPage'])->name('Route_login');





Route::post('registerAccount',[Controllers\UserController::class,'Register'])->name('account_register');
Route::post('loginAccount',[Controllers\UserController::class,'Login'])->name('account_login');
Route::post('forgerPasswordAccount',[Controllers\UserController::class,'Forget_password'])->name('account_forgetPassword');
Route::get('logout', [Controllers\UserController::class,'logout'])->name('logout')->middleware('authh');
Route::get('email_verify/{token}',[Controllers\UserController::class,'email_verify'])->name('email_verify');

Route::get('resetPasswordd',[Controllers\UserController::class,'resetPassword'])->name('resetPassword');
Route::get('resetPasswordCheckToken/{token}',[Controllers\UserController::class,'resetPasswordCheckToken']);
Route::get('resetPassword',[Controllers\UserController::class,'resetPasswordPage'])->name('resetPasswordPage');
Route::post('setNewPassword',[Controllers\UserController::class,'setNewPassword'])->name('setNewPassword');








Route::get('home',function (){

    return view('Main');
})->name('Main');

Route::get('test',function (){

    return \App\Models\User::find(1);
});
Route::get('rr',function (){

    return view('user_auth/register2');
});




Route::get('hi',function (){

    return \Illuminate\Support\Facades\Auth::user();
})->middleware(['authh']);
















