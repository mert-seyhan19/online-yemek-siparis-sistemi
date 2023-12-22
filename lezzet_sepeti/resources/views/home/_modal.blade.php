



    <li class="nav-item dropdown">
      @auth
        <a class="nav-link dropdown-toggle" href="{{route('login')}}" class="btn btn-primary login-button mr-4" role="button" data-toggle="dropdown" >{{ Auth::user()->name}}</a>
      @endauth

      @guest
      <a href="/login" class="btn btn-primary login-button">Login</a>
      <a href="/register" class="btn btn-primary login-button">Join</a>
      @endguest

        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
