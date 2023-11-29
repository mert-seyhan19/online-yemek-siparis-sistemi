<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminKontrol
{
  public function handle(Request $request, Closure $next)
  {
      // Kullanıcı oturum açmış mı kontrol et
      if (auth()->check()) {
          // Kullanıcı admin rolüne sahip mi kontrol et
          if (!auth()->user()->isAdmin()) {
              // Eğer admin değilse, belirlediğiniz bir yere yönlendir
              return redirect('/login'); // Örneğin ana sayfaya yönlendir
          }
      } else {
          // Eğer oturum açılmamışsa, giriş sayfasına yönlendir
          return redirect('/login');
      }

      return $next($request);
  }
}
