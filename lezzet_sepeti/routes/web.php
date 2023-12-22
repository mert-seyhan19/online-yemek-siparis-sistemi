<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfalarControl;
use App\Http\Controllers\LoginController;


use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;




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
Route::get("/hakkimizda",[SayfalarControl::class,'hakkimizda']);
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

    // Kategori Ekleme Başlangıç
    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('admin/category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('admin/category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('admin/category/show', [CategoryController::class, 'show'])->name('admin_category_show');
    // Kategori Ekleme Bitiş


    // Ürün Ekleme Başlangıç
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin_products');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin_product_add');
    Route::post('admin/product/store', [ProductController::class, 'store'])->name('admin_product_store');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin_product_edit');
    Route::post('admin/product/update/{id}', [ProductController::class, 'update'])->name('admin_product_update');
    Route::get('admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin_product_delete');
    Route::get('admin/product/show', [ProductController::class, 'show'])->name('admin_product_show');
    // Ürün Ekleme Bitiş



    // Resim Ekleme Başlangıç
    Route::get('admin/image/create/{product_id}', [ImageController::class, 'create'])->name('admin_image_add');
    Route::post('admin/image/store/{product_id}', [ImageController::class, 'store'])->name('admin_image_store');
    Route::get('admin/image/delete/{id}/{product_id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
    Route::get('admin/image/show', [ImageController::class, 'show'])->name('admin_image_show');
    // Resim Ekleme Bitiş


    // Setting Başlangıç
    Route::get('admin/setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('admin/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
