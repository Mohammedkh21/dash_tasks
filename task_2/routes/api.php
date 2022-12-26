<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'User'],function (){
    Route::post('Login',[\App\Http\Controllers\Api\User\AuthController::class,'Login']);
    Route::group(['middleware'=>['auth:sanctum']],function (){
        Route::post('Logout',[\App\Http\Controllers\Api\User\AuthController::class,'Logout']);
        Route::group(['prefix'=>'Cart'],function (){
            Route::get('/',[\App\Http\Controllers\Api\User\CartController::class,'MyCartProduct']);
            Route::post('add',[\App\Http\Controllers\Api\User\CartController::class,'AddProductToCart']);
            Route::post('delete',[\App\Http\Controllers\Api\User\CartController::class,'DeleteProductFromCart']);

        });
        Route::group(['prefix'=>'Checkout'],function (){
            Route::post('/',[\App\Http\Controllers\Api\User\CheckoutController::class,'Checkout']);
            Route::get('MyOrders',[\App\Http\Controllers\Api\User\CheckoutController::class,'MyOrders']);

        });
    });

});














Route::group(['prefix'=>'Seller'],function (){
    Route::post('Login',[\App\Http\Controllers\Api\Seller\AuthController::class,'Login']);
    Route::group(['middleware'=>['auth:sanctum']],function (){
        Route::post('Logout',[\App\Http\Controllers\Api\Seller\AuthController::class,'Logout']);
        Route::group(['prefix'=>'product'],function (){
            Route::get('all',[\App\Http\Controllers\Api\Seller\ProductController::class,'AllProduct']);
            Route::get('product',[\App\Http\Controllers\Api\Seller\ProductController::class,'Product']);
            Route::post('add',[\App\Http\Controllers\Api\Seller\ProductController::class,'AddNewProduct']);
            Route::post('delete',[\App\Http\Controllers\Api\Seller\ProductController::class,'DeleteProduct']);

        });
    });

});




















Route::group(['prefix'=>'Admin'],function (){
    Route::post('Login',[\App\Http\Controllers\Api\Admin\AuthController::class,'Login']);
    Route::group(['middleware'=>'auth:sanctum'],function (){
        Route::post('Logout',[\App\Http\Controllers\Api\Admin\AuthController::class,'Logout']);

    });

});






Route::post('CheckLogin',function (Request $request){

    return response()->json($request->user() );

})->middleware('auth:sanctum');
