@extends('layouts.app')

@section('content')
<body id="body">
  <main>
    <!-- Banner principal -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/image_1.png" alt="clock1">
        </div>

        <div class="item">
          <img class="imgCarrousel" src="images/reloj-frio.jpg" alt="frio">
        </div>

        <div class="item">
          <img src="images/reloj-clasico.jpg" alt="clasico">
        </div>

        <div class="item">
          <img src="images/reloj-fancy.jpg" alt="fancy">
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="sr-only">Siguiente</span>
      </a>

    </div>

    <!-- Categorías -->
    <div class="categories-text">
      <h2>¿CUÁL ES TU ESTILO?</h2>
      <a class="block-text">Elegí el que más se adapte a vos</a>
    </div>
      <div class="categories-images">
        <a><img src="images/image_2.1.png" alt="Reloj 1"></a>
        <a><img src="images/image_3.png" alt="Reloj 2"></a>
        <a><img src="images/image_4.png" alt="Reloj 3"></a>
      </div>

      <div class="youtube">
        <div class="videowrapper">
          <iframe class="video" src="https://www.youtube.com/embed/k7lFqIr6KgY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <br>
      <div>
        <p id="flower">Como vivis tu vida depende de vos, hace valer tu tiempo.</p>
      </div>
      </main>

@endsection
