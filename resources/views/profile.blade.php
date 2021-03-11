@extends('layouts.app')

@section('content')
<section>
  <div id="perfil">
      <img src="assets/images/avatar.jpg" />
  </div>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <p class="nombrePerfil"><span>NOMBRE(S)</span>
                {{ auth()->user()->profile->name }}
              </p>
              <p class="nombrePerfil"><span>APELLIDO PATERNO</span>
                {{ auth()->user()->profile->psurname }}
              </p>
              <p class="nombrePerfil"><span>APELLIDO MATERNO</span>
                {{ auth()->user()->profile->msurname }}
              </p>
              <p class="correoPerfil"><span>CORREO</span>
                {{ auth()->user()->email }}
              </p>
          </div>
      </div>
  </div>
</section>
@endsection