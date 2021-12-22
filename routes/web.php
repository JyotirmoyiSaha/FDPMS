<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\website\UserController;
use App\Http\Controllers\RequisitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;

//website 
use App\Http\Controllers\website\ProductController as WebsiteProductController;



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


Route::get('/website', function () {
    return view('website.pages.home');
});

Route::get('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/registration/store',[UserController::class,'registrationstore'])->name('user.registration.store');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

//Product Routes

Route::get('/product/list',[WebsiteProductController::class,'product'])->name('website.product');


//for backend


Route::group(['prefix'=>'admin'],function(){
    Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
    Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
    Route::get('/logout',[AdminUserController::class,'logout'])->name('user.logout');
    Route::group(['middleware'=>'auth'],function(){

        Route::get('/master', function () {
            return view('master');
        })->name('admin.master');

        Route::get('/', function () {
            return view('admin.login');
        })->name('admin');
    });
    
    
    //Product Routes
    Route::get('product-list',[ProductController::class,'productList'])->name('admin.product.list');
    Route::get('product-create',[ProductController::class,'productCreate'])->name('admin.product.create');
    // database
    Route::post('/product/store',[ProductController::class,'productStore'])->name('admin.product.store');
    
    //product create Routes
    Route::get('pro_c-list',[ProductController::class,'prodList'])->name('admin.product_category.prolist');
    Route::get('pro_c-create',[ProductController::class,'prodCreate'])->name('admin.product_category.procreate');
    
    // database
    Route::post('/pro_c-create/store',[ProductController::class,'procreateStore'])->name('admin.product_category.store');
    
    //Stock Routes
    Route::get('stock-list',[StockController::class,'stockList'])->name('admin.stock.list');
    Route::get('stock-create',[StockController::class,'stockCreate'])->name('admin.stock.create');
    // database
    Route::post('/stock/store',[StockController::class,'stockStore'])->name('admin.stock.store');
    
    Route::get('register',[RegisterController::class,'register'])->name('admin.register');
    Route::get('home',[HomeController::class,'home'])->name('admin.home');
    
    //Requisition Routes
    Route::get('rlist',[RequisitionController::class,'rList'])->name('admin.requisition.list');
    Route::get('rdetails',[RequisitionController::class,'rDetails'])->name('admin.requisition.details');
    
    //for dealer
    Route::get('dealer-list',[DealerController::class,'dealerList'])->name('admin.dealer.list');
    Route::get('dealer-create',[DealerController::class,'dealerCreate'])->name('admin.dealer.create');
    
    //User Routes
    Route::get('user-create',[UserController::class,'userCreate'])->name('admin.user.create');
    Route::get('user-list',[HomeController::class,'userList'])->name('admin.user.list');

});






