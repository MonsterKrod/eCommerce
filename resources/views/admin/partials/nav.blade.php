<nav class="navbar navbar-default fixat">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Krod eCommerce</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"> <i class='fa fa-dashboard'></i></p>

      <ul class="nav navbar-nav navbar-right">
          <li><a href="home">Inici</a></li>
        <li><a href="{{ route('category.index') }}">Categories</a></li>
        <li><a href="{{ route('product.index') }}">Productes</a></li>
        <li><a href="{{ route('user.index') }}">Usuaris</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>{{Auth::user()->user}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('logout')}}">Tancar sessió</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
