<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
      <span class="navbar-text">
        444
    </span>
    <ul>
      <li><a style="color:white;" href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme"> {{ Cart::count() }}</span></a></li>
      @guest
      <li><a href="{{ route('login') }}"><button type="button" class="btn btn-info">Login</button></a></li>
      <li><a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Register</button></a></li>
      @endguest
      @auth
      <li><a href="{{ route('logout') }}"><button type="button" class="btn btn-info">Logout</button></a></li>
      @endauth
    </ul>
    </div>
</nav>
