<!DOCTYPE html>
<html lang="en">

<head>
    <title>GANA MÁS</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="images/favicon/icon-192x192.png">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="welcome" class="antialiased">

  <div id="carouselExampleIndicators" class="carousel slide wellcomeslider" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/slider/OXXO-MARS-INTRO-001.jpg" class="d-block w-100" alt="OXXO MARS INSTRUCTION">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider/OXXO-MARS-INTRO-002.jpg" class="d-block w-100" alt="OXXO MARS INSTRUCTION">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider/OXXO-MARS-INTRO-003.jpg" class="d-block w-100" alt="OXXO MARS INSTRUCTION">
      </div>
    </div>
  </div>


  
  @if (Route::has('login'))
  <div>
      @auth
          <a href="{{ url('/home') }}" class="iniciarSesion" style="
          margin-top: -10vh !important; width: 70%;">INGRESAR</a>
      @else
          <a class="iniciarSesion" style="
  margin-top: -10vh !important; width: 70%;" href="{{ route('login') }}">INGRESAR</a>

          {{-- @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif --}}
      @endauth
  </div>
@endif

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
