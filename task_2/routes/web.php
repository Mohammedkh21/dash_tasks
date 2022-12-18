<?php

use App\Models\Category;
use App\Models\Currencie;
use App\Models\Product;
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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get('h',function (){

    return  (\Illuminate\Support\Facades\Http::get('https://open.er-api.com/v6/latest/USD'))['rates'];
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[\App\Http\Controllers\OrderController::class,'all2'])->name('allCategory');
Route::get('Category/{name}',[\App\Http\Controllers\OrderController::class,'customCategory'])->name('customCategory');
Route::post('AddToCart2',[\App\Http\Controllers\OrderController::class,'AddToCart2'])->name('AddToCart2');
Route::post('DeleteFromCart2',[\App\Http\Controllers\OrderController::class,'DeleteFromCart2'])->name('DeleteFromCart2');

Route::group(['middleware'=>'auth'],function (){
    Route::get('checkoutPage',[\App\Http\Controllers\OrderController::class,'checkoutPage'])->name('checkoutPage');
    Route::post('checkout',[\App\Http\Controllers\OrderController::class,'checkout'])->name('checkout');
    Route::get('myOrders',[\App\Http\Controllers\OrderController::class,'myOrders'])->name('myOrders');

});

Route::group([],function (){
    //Route::get('buy',[\App\Http\Controllers\OrderController::class,'all']);
    //Route::post('AddToCart',[\App\Http\Controllers\OrderController::class,'AddToCart'])->name('AddToCart');
    //Route::post('DeleteFromCart',[\App\Http\Controllers\OrderController::class,'DeleteFromCart'])->name('DeleteFromCart');


    Route::group(['prefix'=>'admin'],function (){

        Route::get('login',[\App\Http\Controllers\admin_controller::class,'login_page'])->name('admin.login_page');
        Route::post('admin_login',[\App\Http\Controllers\admin_controller::class,'admin_login'])->name('admin.login');

        Route::group(['middleware'=>'auth:admin'],function (){
            Route::get('/',[\App\Http\Controllers\admin_controller::class,'dashboard'])->name('admin.dashboard');

            Route::group(['prefix'=>'admins'],function () {
                Route::get('/', [\App\Http\Controllers\admin_controller::class, 'admins'])->name('admin.admins');
                Route::get('admins/add', [\App\Http\Controllers\admin_controller::class, 'admins_add'])->name('admin.admins.add');
                Route::post('admins/new', [\App\Http\Controllers\admin_controller::class, 'admins_add_new'])->name('admin.admins.add_new');
                Route::get('admins/update/{id}', [\App\Http\Controllers\admin_controller::class, 'admins_update'])->name('admin.admins.update');
                Route::post('admin/update', [\App\Http\Controllers\admin_controller::class, 'admin_update'])->name('admin.admin.update');
                Route::post('admin/permissions/update', [\App\Http\Controllers\admin_controller::class, 'admin_permissions_update'])->name('admin.permissions.update');
                Route::post('admin/delete', [\App\Http\Controllers\admin_controller::class, 'admins_delete'])->name('admin.admin.delete');
                Route::get('admin/logout', [\App\Http\Controllers\admin_controller::class, 'admin_logout'])->name('admin.logout');

            });

            Route::group(['prefix'=>'sellers'],function () {
                Route::get('/', [\App\Http\Controllers\admin_controller::class, 'sellers'])->name('admin.sellers');
                Route::get('sellers/add', [\App\Http\Controllers\admin_controller::class, 'sellers_add'])->name('admin.sellers.add');
                Route::post('sellers/new', [\App\Http\Controllers\admin_controller::class, 'sellers_add_new'])->name('admin.sellers.add_new');

                Route::get('sellers/update/{id}', [\App\Http\Controllers\admin_controller::class, 'sellers_update'])->name('admin.sellers.update');
                Route::post('seller/update', [\App\Http\Controllers\admin_controller::class, 'seller_update'])->name('admin.seller.update');

                Route::post('seller/delete', [\App\Http\Controllers\admin_controller::class, 'sellers_delete'])->name('admin.seller.delete');
            });
            //************
            Route::group(['prefix'=>'products'],function (){
                Route::get('/',[\App\Http\Controllers\admin_controller::class,'products'])->name('admin.products');

                Route::get('products/add',[\App\Http\Controllers\admin_controller::class,'products_add'])->name('admin.products.add');
                Route::post('products/new',[\App\Http\Controllers\admin_controller::class,'products_add_new'])->name('admin.products.add_new');

                Route::get('products/update/{id}',[\App\Http\Controllers\admin_controller::class,'products_update'])->name('admin.products.update');
                Route::post('products/update',[\App\Http\Controllers\admin_controller::class,'product_update'])->name('admin.product.update');

                Route::post('products/delete',[\App\Http\Controllers\admin_controller::class,'product_delete'])->name('admin.product.delete');

            });

            Route::group(['prefix'=>'orders'],function (){
                Route::get('AllOrders',[\App\Http\Controllers\admin_controller::class,'AllOrders'])->name('admin.AllOrders');
                Route::post('MakeOrderAsComplete',[\App\Http\Controllers\admin_controller::class,'MakeOrderAsComplete'])->name('admin.MakeOrderAsComplete');
            });

            Route::group(['prefix'=>'currencies'],function (){
                Route::get('all',[\App\Http\Controllers\CurrenciesController::class,'all'])->name('admin.currencies');
                Route::post('update',[\App\Http\Controllers\CurrenciesController::class,'update_status'])->name('admin.currencies.update');
            });

            Route::group(['prefix'=>'categorys'],function (){
                Route::get('all',[\App\Http\Controllers\admin_controller::class,'category'])->name('admin.categorys');
                Route::get('add',[\App\Http\Controllers\admin_controller::class,'addCategory'])->name('admin.categorys.add');
                Route::post('addCategory',[\App\Http\Controllers\admin_controller::class,'addCategoryNew'])->name('admin.categorys.add.new');
                Route::get('update/{id}',[\App\Http\Controllers\admin_controller::class,'updateCategorys'])->name('admin.categorys.update');
                Route::post('update',[\App\Http\Controllers\admin_controller::class,'updateCategory'])->name('admin.category.update');
                Route::post('delete',[\App\Http\Controllers\admin_controller::class,'deleteCategory'])->name('admin.category.delete');


            });

        });

    });

    Route::group(['prefix'=>'seller'],function (){
        Route::get('login',[\App\Http\Controllers\SellerController::class,'LoginPage']);
        Route::post('LoginSeller',[\App\Http\Controllers\SellerController::class,'login'])->name('seller.login');
        Route::get('logout',[\App\Http\Controllers\SellerController::class,'logout'])->name('seller.logout');
        Route::group(['middleware'=>'auth:seller'],function (){
            Route::get('/',[\App\Http\Controllers\SellerController::class,'mainPage'])->name('seller.mainPage');
            Route::get('/add/product',[\App\Http\Controllers\SellerController::class,'addProductPage'])->name('seller.addProductPage');
            Route::post('/add/product',[\App\Http\Controllers\SellerController::class,'addProduct'])->name('seller.addProduct');
            Route::get('/update/product/{id}',[\App\Http\Controllers\SellerController::class,'updateProducts'])->name('seller.updateProducts');
            Route::post('/update/product',[\App\Http\Controllers\SellerController::class,'updateProduct'])->name('seller.updateProduct');
            Route::post('/delete/product',[\App\Http\Controllers\SellerController::class,'deleteProduct'])->name('seller.deleteProduct');

        });
    });

});
Route::get('run_command',[\App\Http\Controllers\CurrenciesController::class,'run_command']);




Route::get('k',function ( ){
    return json_encode( [
        ['admin','v'=>0,'a'=>0,'u'=>0,'d'=>0],
        ['category','v'=>0,'a'=>0,'u'=>0,'d'=>0],
        ['product','v'=>0,'a'=>0,'u'=>0,'d'=>0],
        ['seller','v'=>0,'a'=>0,'u'=>0,'d'=>0],
        ['order','v'=>0,'a'=>0,'u'=>0,'d'=>0],
        ['currencie','v'=>0,'a'=>0,'u'=>0,'d'=>0]
    ]);
});


