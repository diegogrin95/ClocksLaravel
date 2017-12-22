<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <title>C L O C K</title>
</head>
<body>
<header id="header">
  <!-- Barra de navegación -->
  <nav class="navigation">
    <ul class="navigation-menu">
      <li><a href="{{ url('/') }}" class="navigation-user-logo">
        <img src="images/logo.png" alt="Logo"></a>
      </li>
    </ul>
    <ul class="navigation-user">

      @if(Auth::check())
      <li><span class="navigation-menu-link">Bienvenidos, </span></li>
      <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="navigation-user-link">Salir</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
      <li><a href="ayuda.php" class="navigation-menu-link">Ayuda</a></li>

      @else
      <li><a href="{{ url('/login') }}"><span class="navigation-user-link">Ingresá</a></li>
      <li><a href="{{ url('/register') }}"><span class="navigation-menu-link">Registrate</a></li>
      <li><a href="#"><span class="navigation-menu-link">Ayuda</a></li>
      @endif

    </ul>
  </nav>
</header>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

</body>
</html>
