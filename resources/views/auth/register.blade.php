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
                    
                    <div id="segundo">
                        
                        <!-- Validation Errors -->
                        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- foto --}}
                            <div id="registro">
                                <img src="assets/images/avatar.jpg" />
                                <a href="" class="subirPhoto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                      </svg>
                                </a>
                            </div>
                            
                            

                            <!-- usuario -->
                            <div class="mb-3">
                                <x-label for="employee" class="form-label" :value="__('# DE EMPLEADO')" />

                                <x-input id="employee" class="form-control" type="text" name="employee" :value="old('employee')" required />
                            </div>

                            <!-- Name -->
                            <div class="mb-3">
                                <x-label for="name" class="form-label" :value="__('NOMBRE(S)')" />

                                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required />
                            </div>

                            <!-- paterno -->
                            <div class="mb-3">
                                <x-label for="psurname" class="form-label" :value="__('PATERNO')" />

                                <x-input id="psurname" class="form-control" type="text" name="psurname" :value="old('psurname')" required />
                            </div>

                            <!-- materno -->
                            <div class="mb-3">
                                <x-label for="msurname" class="form-label" :value="__('MATERNO')" />

                                <x-input id="msurname" class="form-control" type="text" name="msurname" :value="old('msurname')" required />
                            </div>

                            <!-- celular -->
                            <div class="mb-3">
                                <x-label for="phone" class="form-label" :value="__('CELULAR')" />

                                <x-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required />
                            </div>

                            <!-- cumpleaños -->
                            <div class="mb-3">
                                <x-label for="birthday" class="form-label" :value="__('CUMPLEAÑOS')" />

                                <x-input id="birthday" class="form-control" type="date" name="birthday" :value="old('birthday')" required />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" class="form-label" :value="__('E-MAIL')" />

                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" class="form-label" :value="__('CONTRASEÑA')" />

                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation"  class="form-label" :value="__('Confirmar contraseña')" />

                                <x-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>

                            <!-- tienda -->
                            <div class="my-3">
                                {{-- <x-label for="store" class="form-label" :value="__('CUMPLEAÑOS')" /> --}}

                                <select id="store" class="form-select" name="store" :value="old('store')">
                                    <option selected>Selecciona OXXO</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <!-- telefono -->
                            <div class="mb-3">
                                <x-label for="storePhone" class="form-label"  :value="__('TELÉFONO DE TIENDA')" />

                                <x-input id="storePhone" class="form-control" type="text" name="storePhone" :value="old('storePhone')" required />
                            </div>

                            <!-- direccion -->
                            <div class="mb-3">
                                <x-label for="address" class="form-label" :value="__('DIRECCIÓN DE TIENDA')" />

                                <x-input id="address" class="form-control" type="text" name="address" :value="old('address')" required />
                            </div>

                            <!-- estado -->
                            <div class="my-3">
                                {{-- <x-label for="birthday" class="form-label" :value="__('ESTADO')" /> --}}

                                <select id="state" class="form-select" name="state" :value="old('state')">
                                    <option selected>Selecciona Estado</option>
                                    <option>Aguascalientes</option>
                                    <option>Baja California</option>
                                    <option>Baja California Sur</option>
                                    <option>Campeche</option>
                                    <option>Chiapas</option>
                                    <option>Chihuahua</option>
                                    <option>Ciudad de México</option>
                                    <option>Coahuila</option>
                                    <option>Colima</option>
                                    <option>Durango</option>
                                    <option>Guanajuato</option>
                                    <option>Guerrero</option>
                                    <option>Hidalgo</option>
                                    <option>Jalisco</option>
                                    <option>México</option>
                                    <option>Michoacán</option>
                                    <option>Morelos</option>
                                    <option>Nayarit</option>
                                    <option>Nuevo León</option>
                                    <option>Oaxaca</option>
                                    <option>Puebla</option>
                                    <option>Querétaro</option>
                                    <option>Quintana Roo</option>
                                    <option>San Luis Potosí</option>
                                    <option>Sinaloa</option>
                                    <option>Sonora</option>
                                    <option>Tabasco</option>
                                    <option>Tamaulipas</option>
                                    <option>Tlaxcala</option>
                                    <option>Veracruz</option>
                                    <option>Yucatán</option>
                                    <option>Zacatecas</option>
                                </select>
                            </div>

                            <x-button class="btn">
                                {{ __('REGISTRARSE') }}
                            </x-button>

                            <p class="registro">¡Ya tienes una cuenta,<br>inicia sesión <a class="init-session" href="{{ route('login') }}">aquí</a>!</p>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#segundo").show();
    });
</script>

</html>
