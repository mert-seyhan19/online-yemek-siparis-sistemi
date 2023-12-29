<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Message;

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
        $slider = Product::select('id','title','image','price')->limit(15)->get();

        $data = [
          'setting'=>$setting,
          'slider'=>$slider,
          'page'=>'home'
        ];
        return view('home.index',$data);
      }


      public function product($id)
      {
        $data = Product::find($id);
        print_r($data);
        exit();
      }


      public function categoryproducts($id)
      {
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        //print_r($data);
        //exit();
        return view('home.category_products',['data'=>$data, 'datalist'=>$datalist]);
      }


      public function aboutus()
      {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
      }


      public function references()
      {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
      }

      public function contact()
      {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
      }

      public function sendmessage(Request $request)
      {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız kaydedilmiştir, Teşekkür ederiz.');
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
