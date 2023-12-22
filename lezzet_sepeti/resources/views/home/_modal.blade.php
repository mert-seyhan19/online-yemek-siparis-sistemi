<li class="nav-item">

@auth
  <a href="{{route('login')}}" class="btn btn-primary login-button mr-4">{{ Auth::user()->name}}</a>
@elseauth
  <a href="/giris" class="btn btn-primary login-button">Giriş Yap</a>
@endauth
</li>
