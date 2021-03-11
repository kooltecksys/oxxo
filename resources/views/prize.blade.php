@extends('layouts.app')

@section('content')
<section>
  <div class="container">

      <div class="row wall-titulos">
          <h1>{{ $product->title }}<span class="color-dot">.</span></h1>
      </div>


      <div class="row wall-lamision">
          <img class="fotoExito" src="{{ asset($product->image)}}">

          <h1 class="titles" style="margin-top:15px">Descripción</h1>
          <p class="descripcion-premio">{{ $product->description }}</p>
          

          <div class="col-6">
              <div class="preciopremio">
                  <h2>{{ $product->price }}</h2> 
              </div>
          </div>

          <div class="col-6">
            <a href="/add-to-cart/{{ $product->id }}"> <div class="adquirir">AGREGAR</div></a>
          </div>

      </div>
      
      <!-- FIXED -->
      <div class="fixed-tab"></div>
      <!-- END FIXED -->

  </div>
</section>
@endsection
