<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $userRoles = Auth::user()->roles->pluck('name');
        dd($userRoles);
        if (!$userRoles->contains('admin')) {
          return redirect(route('sayfalar.admin_login'))->with('error','Yetkiniz bulunmamaktadır.');
        }

        return $next($request);
    }
}
