



    <li class="nav-item dropdown">
      @auth
        <a class="nav-link dropdown-toggle" href="{{route('login')}}" class="btn btn-primary login-button mr-4" role="button" data-toggle="dropdown" >{{ Auth::user()->name}}</a>
      @endauth

      @guest
      <a href="{{route('admin_login')}}" class="btn btn-primary login-button">Login</a>
      <a href="/register" class="btn btn-primary login-button">Join</a>
      @endguest

        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('myprofile')}}">My Account</a>
          <a class="dropdown-item" href="{{route('user_orders')}}">My Orders</a>
          <a class="dropdown-item" href="{{route('user_products')}}">My Menu</a>
          <a class="dropdown-item" href="{{route('user_shopcart')}}">My Shopcart</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
