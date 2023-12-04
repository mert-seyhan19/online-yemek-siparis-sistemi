<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfalarControl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController;




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
    return view('sayfalar.index');
});

Route::get("/anasayfa",[SayfalarControl::class,'anasayfa']);

Route::get("/hakkimizda",[SayfalarControl::class,'hakkimizda']);

Route::get("/kebaplar",[SayfalarControl::class,'kebaplar']);

Route::get("/pizzalar",[SayfalarControl::class,'pizzalar']);

Route::get("/pideler",[SayfalarControl::class,'pideler']);

Route::get("/tatlilar",[SayfalarControl::class,'tatlilar']);

Route::get("/icecekler",[SayfalarControl::class,'icecekler']);

Route::get("/iletisim",[SayfalarControl::class,'iletisim']);




Route::get('/login', function () {
    return view('sayfalar.admin.login');
})->name('login');


Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');







    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('admin/category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('admin/category/update', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('admin/category/delete', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('admin/category/show', [CategoryController::class, 'show'])->name('admin_category_show');
