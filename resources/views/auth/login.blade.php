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

<body id="welcome">
    <header>
        <img class="ganaLogin" src="assets/images/ganamas.png" />
    </header>
    <section id="log">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div id="primero">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                
                            <!-- Email Address -->
                            <div>
                                <x-label for="email" class="form-label" :value="__('USUARIO')" />
                                
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" class="form-control" :value="old('email')" required autofocus />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" class="form-label" :value="__('Password')" />
                
                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                            </div>

                            <div class="my-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">RECORDAR MIS DATOS</label>
                            </div>

             
                
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="problem" href="{{ route('password.request') }}">
                                        {{ __('¿OLVIDASTE TU CONTRASEÑA?') }}
                                    </a>
                                @endif
                
                                <x-button class="btn">
                                    {{ __('ENTRAR') }}
                                </x-button>
                            </div>
                        </form>
                        <p class="registro">¡Si aún no tienes cuenta,<br>regístrate <a class="check-cuenta"
                            href="{{ route('register') }}">aquí</a>!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</html>