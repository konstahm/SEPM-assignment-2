<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="{{  route('product.index') }}">3bay.io</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" style="width: 170px;" href="{{ route('product.shoppingCart') }}">
          <i class="fas fa-shopping-cart"></i> Shopping Cart
          <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          @if(Auth::check())
              <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
              <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>
              <a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>
          @endif
        </div>
      </li>
    </ul>
  </div>
</nav>
