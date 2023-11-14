<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Anasayfacontrol extends Controller
{
  public function admin()
  {
      return view('sayfalar/admin/index'); // 'home' şablonunu döndür
  }
}
