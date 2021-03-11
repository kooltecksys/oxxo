<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GANA MÁS</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    </head>
    <body id="interior">
        @include('layouts.navigation')
        
        @yield('content')

        @include('layouts.tabs')
    
        <div class="exit-gradient"></div>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script>
            window.onscroll = function () { myFunction() };
        
            var header = document.getElementById("homeHeader");
            var sticky = header.offsetTop;
        
            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
    </body>
</html>
