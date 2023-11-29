<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayfalarControl extends Controller
{
  public function anasayfa()
  {
      return view('sayfalar/anasayfa'); // 'home' şablonunu döndür
  }

  public function hakkimizda()
  {
      return view('sayfalar/hakkimizda'); // 'home' şablonunu döndür
  }

  public function kebaplar()
  {
      return view('sayfalar/kebaplar'); // 'home' şablonunu döndür
  }

  public function pizzalar()
  {
      return view('sayfalar/pizzalar'); // 'home' şablonunu döndür
  }

  public function pideler()
  {
      return view('sayfalar/pideler'); // 'home' şablonunu döndür
  }

  public function tatlilar()
  {
      return view('sayfalar/tatlilar'); // 'home' şablonunu döndür
  }

  public function icecekler()
  {
      return view('sayfalar/icecekler'); // 'home' şablonunu döndür
  }

  public function iletisim()
  {
      return view('sayfalar/iletisim'); // 'home' şablonunu döndür
  }




}
