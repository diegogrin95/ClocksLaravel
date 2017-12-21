<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <title>C L O C K</title>
</head>
<body>
<header id="header">
  <!-- Barra de navegación -->
  <nav class="navigation">
    <ul class="navigation-menu">
      <li><a href="home.php" class="navigation-user-logo">
        <img src="images/logo.png" alt="Logo"></a>
      </li>
    </ul>
    <ul class="navigation-user">

      @if(Auth::check())
      <li><span class="navigation-menu-link">Bienvenidos, </span></li>
      <li><a href="logout.php" class="navigation-user-link">Salir</a></li>
      <li><a href="ayuda.php" class="navigation-menu-link">Ayuda</a></li>

      <li> <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="logButtons glyphicon glyphicon-user">Salir</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
      </li>




      @else
      <li><a href="{{ url('/login') }}"><span class="navigation-user-link">Ingresá</a></li>
      <li><a href="{{ url('/register') }}"><span class="navigation-menu-link">Registrate</a></li>
      <li><a href="#"><span class="navigation-menu-link">Ayuda</a></li>
      @endif

    </ul>
  </nav>
</header>

@yield('content')

</body>
</html>
