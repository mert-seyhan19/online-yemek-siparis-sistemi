<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;

class SayfalarControl extends Controller
{



      public static function categorylist()
      {

        return Category::where('parent_id', '=', 0)->with('children')->get();

      }


      public static function getsetting()
      {

        return Setting::first();

      }


      public function index()
      {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
      }




      public function anasayfa()
      {
          $setting = Setting::first();
          return view('sayfalar/anasayfa',['setting'=>$setting]);
      }

      public function hakkimizda()
      {
          return view('sayfalar/hakkimizda');
      }

      public function kebaplar()
      {
          return view('sayfalar/kebaplar');
      }

      public function pizzalar()
      {
          return view('sayfalar/pizzalar');
      }

      public function pideler()
      {
          return view('sayfalar/pideler');
      }

      public function tatlilar()
      {
          return view('sayfalar/tatlilar');
      }

      public function icecekler()
      {
          return view('sayfalar/icecekler');
      }

      public function iletisim()
      {
          return view('sayfalar/iletisim');
      }




}
