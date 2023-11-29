<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Modelislemleri;

class LoginController extends Controller
{

          public function check(Request $request)
          {
              $credentials = $request->only('mail_adresi', 'sifre');

              // Veritabanında kullanıcıyı kontrol et
              $user = Modelislemleri::where('mail_adresi', $request->mail_adresi)->first();

              if ($user && $user->sifre == $request->sifre)
              {
                  // Kullanıcı doğrulandı, admin sayfasına yönlendir
                  return redirect()->route('admin');
              }
              else
              {
                  // Oturum açma başarısız

                  // veya
                  return redirect()->route('login')->with('error', 'Mail adresi veya şifre hatalı');
              }
          }
}
