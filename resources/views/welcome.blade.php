@extends('layouts.app')

@section('content')
<body id="body">
  <main>
    <!-- Banner principal -->
    <div class="main-banner">Imagen principal</div>
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
