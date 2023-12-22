<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class HomeController extends Controller
{
      public function index()
      {

          return view('admin.index');
      }


      public function login()
      {
        return view('sayfalar.admin.login');
      }



      public function logincheck(Request $request)
      {

            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                return view('admin.index');
            }
                return view('sayfalar.admin.login');
      }


      public function logout()
      {
        Auth::logout();
        return view('sayfalar.admin.login');
      }


}
