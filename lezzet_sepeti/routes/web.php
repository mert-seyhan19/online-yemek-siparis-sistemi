<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfalarControl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\OrderController;


use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;




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

Route::get("/",[SayfalarControl::class,'index'])->name('index');
Route::get("/anasayfa",[SayfalarControl::class,'anasayfa'])->name('anasayfa');
Route::get("/aboutus",[SayfalarControl::class,'aboutus'])->name('aboutus');
Route::get("/references",[SayfalarControl::class,'references'])->name('references');
Route::get("/contact",[SayfalarControl::class,'contact'])->name('contact');
Route::get("/faq",[SayfalarControl::class,'faq'])->name('faq');
Route::post("/sendmessage",[SayfalarControl::class,'sendmessage'])->name('sendmessage');

Route::get("/product/{id}",[SayfalarControl::class,'product'])->name('product'); //ürünlerin bilgilerini anasayfanın galeri bölümüne ekler
Route::get("/categoryproducts/{id}",[SayfalarControl::class,'categoryproducts'])->name('categoryproducts'); //Kategori bölümü


Route::get("/kategoriler",[SayfalarControl::class,'categorylist']);
Route::get("/kebaplar",[SayfalarControl::class,'kebaplar']);
Route::get("/pizzalar",[SayfalarControl::class,'pizzalar']);
Route::get("/pideler",[SayfalarControl::class,'pideler']);
Route::get("/tatlilar",[SayfalarControl::class,'tatlilar']);
Route::get("/icecekler",[SayfalarControl::class,'icecekler']);
Route::get("/iletisim",[SayfalarControl::class,'iletisim']);






Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::get('/admin', [HomeController::class, 'index'])->name('admin')->middleware('auth');



Route::middleware('auth')->group(function(){
  //Route::middleware('admin')->group(function(){
        // Kategori Ekleme Başlangıç
        Route::get('admin/category', [CategoryController::class, 'index'])->name('admin_category');
        Route::get('admin/category/add', [CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('admin/category/create', [CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('admin/category/show', [CategoryController::class, 'show'])->name('admin_category_show');
        // Kategori Ekleme Bitiş
//  });
});


Route::middleware('auth')->group(function(){
    // Mesajlar Başlangıç
    Route::get("admin/messages",[MessageController::class,'index'])->name('admin_message');
    Route::get('admin/messages/edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
    Route::post('admin/messages/update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
    Route::get('admin/messages/delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
    Route::get('admin/messages/show', [MessageController::class, 'show'])->name('admin_message_show');
    // Mesajlar Bitiş
});



Route::middleware('auth')->group(function(){
    // Ürün Ekleme Başlangıç
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin_products');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin_product_add');
    Route::post('admin/product/store', [ProductController::class, 'store'])->name('admin_product_store');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin_product_edit');
    Route::post('admin/product/update/{id}', [ProductController::class, 'update'])->name('admin_product_update');
    Route::get('admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin_product_delete');
    Route::get('admin/product/show', [ProductController::class, 'show'])->name('admin_product_show');
    // Ürün Ekleme Bitiş
});



Route::middleware('auth')->group(function(){
    // Resim Ekleme Başlangıç
    Route::get('admin/image/create/{product_id}', [ImageController::class, 'create'])->name('admin_image_add');
    Route::post('admin/image/store/{product_id}', [ImageController::class, 'store'])->name('admin_image_store');
    Route::get('admin/image/delete/{id}/{product_id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
    Route::get('admin/image/show', [ImageController::class, 'show'])->name('admin_image_show');
    // Resim Ekleme Bitiş
});


// Shopcart Başlangıç
  Route::middleware('auth')->group(function(){
    Route::get('/shopcart', [ShopcartController::class, 'index'])->name('user_shopcart');
    Route::post('shopcart/store/{id}', [ShopcartController::class, 'store'])->name('user_shopcart_add');
    Route::post('shopcart/update/{id}', [ShopcartController::class, 'update'])->name('user_shopcart_update');
    Route::get('shopcart/delete/{id}', [ShopcartController::class, 'destroy'])->name('user_shopcart_delete');
    // Shopcart Bitiş
});


// Order Başlangıç
Route::middleware('auth')->group(function(){
Route::get('/order', [OrderController::class, 'index'])->name('user_orders');
Route::post('order/create', [OrderController::class, 'create'])->name('user_order_add');
Route::post('order/store', [OrderController::class, 'store'])->name('user_order_store');
Route::get('order/edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
Route::post('order/update/{id}', [OrderController::class, 'update'])->name('user_order_update');
Route::get('order/delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');
Route::get('order/show/{id}', [OrderController::class, 'show'])->name('user_order_show');
});
// Order Bitiş


// Setting Başlangıç
Route::middleware('auth')->group(function(){

    Route::get('admin/setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('admin/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');
});
// Setting Bitiş



// Faq Başlangıç
Route::middleware('auth')->group(function(){
Route::get('/admin/faq', [FaqController::class, 'index'])->name('admin_faq');
Route::get('admin/faq/create', [FaqController::class, 'create'])->name('admin_faq_add');
Route::post('admin/faq/store', [FaqController::class, 'store'])->name('admin_faq_store');
Route::get('admin/faq/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
Route::post('admin/faq/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
Route::get('admin/faq/delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
Route::get('admin/faq/show', [FaqController::class, 'show'])->name('admin_faq_show');
});
// Faq Bitiş


// Admin Order Başlangıç
Route::middleware('auth')->group(function(){
Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin_orders');
Route::get('admin/order/list/{status}', [AdminOrderController::class, 'list'])->name('admin_order_list');
Route::post('admin/order/create', [AdminOrderController::class, 'create'])->name('admin_order_add');
Route::post('admin/order/store', [AdminOrderController::class, 'store'])->name('admin_order_store');
Route::get('admin/order/edit/{id}', [AdminOrderController::class, 'edit'])->name('admin_order_edit');
Route::post('admin/order/update/{id}', [AdminOrderController::class, 'update'])->name('admin_order_update');
Route::post('admin/order/itemupdate/{id}', [AdminOrderController::class, 'itemupdate'])->name('admin_order_item_update');
Route::get('admin/order/delete/{id}', [AdminOrderController::class, 'destroy'])->name('admin_order_delete');
Route::get('admin/order/show/{id}', [AdminOrderController::class, 'show'])->name('admin_order_show');
});
// Admin Order Bitiş



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Profile Başlangıç
Route::middleware('auth')->group(function(){

    Route::get('/myaccount', [UserController::class, 'index'])->name('myprofile');

});
// User Profile Bitiş


Route::middleware('auth')->group(function(){

    Route::get('user/profile', [UserController::class, 'index'])->name('userprofile');

      Route::get('/user/product', [App\Http\Controllers\ProductController::class, 'index'])->name('user_products');
      Route::get('user/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('user_product_add');
      Route::post('user/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('user_product_store');
      Route::get('user/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('user_product_edit');
      Route::post('user/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('user_product_update');
      Route::get('user/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('user_product_delete');
      Route::get('user/product/show', [App\Http\Controllers\ProductController::class, 'show'])->name('user_product_show');


      // Resim Ekleme Başlangıç
      Route::middleware('admin')->group(function(){
      Route::get('user/image/create/{product_id}', [ImageController::class, 'create'])->name('user_image_add');
      Route::post('user/image/store/{product_id}', [ImageController::class, 'store'])->name('user_image_store');
      Route::get('user/image/delete/{id}/{product_id}', [ImageController::class, 'destroy'])->name('user_image_delete');
      Route::get('user/image/show', [ImageController::class, 'show'])->name('user_image_show');
    });
      // Resim Ekleme Bitiş

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
