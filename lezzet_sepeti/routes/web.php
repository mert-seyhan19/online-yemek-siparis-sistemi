<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayfalarControl;
use App\Http\Controllers\Admin\Anasayfacontrol;


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

Route::get("/admin",[Anasayfacontrol::class,'admin']);

Route::get("/admin/login",[SayfalarControl::class,'login']);
