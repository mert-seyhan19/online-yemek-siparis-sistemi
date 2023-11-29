<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Modelislemleri;

class AdminController extends Controller
{
  public function index()
  {
      return view('sayfalar.admin.index'); // Eğer admin.blade.php adlı bir görünüm dosyanız varsa
  }
}
