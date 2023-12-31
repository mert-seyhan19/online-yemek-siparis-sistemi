<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfalarControl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\FaqController;




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
    // Kategori Ekleme Başlangıç
    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('admin/category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('admin/category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('admin/category/show', [CategoryController::class, 'show'])->name('admin_category_show');
    // Kategori Ekleme Bitiş
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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Profile Başlangıç
Route::middleware('auth')->group(function(){

    Route::get('/myaccount', [UserController::class, 'index'])->name('myprofile');

});
// User Profile Bitiş


Route::middleware('auth')->group(function(){

    Route::get('user/profile', [UserController::class, 'index'])->name('userprofile');

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
