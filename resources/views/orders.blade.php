@extends('layouts.app')

@section('content')
<section>
  <div class="container">

     
      <div class="row wall-titulos">
          <h1>MIS PEDIDOS<span class="color-dot">.</span></h1>
          <p>En esta sección encontrarás los pedidos que haz generado al canje tus puntos.</p>
      </div>


      <div class="row wall-principal">
          @if ($orders)
            @foreach ($orders as $order)
                <div class="row-list-misiones wow bounceIn animated" style="visibility: visible;">
                    <a href="/orders/{{ $order->id }}">
                        <div class="row">
                            <div class="col-3 row-list-misiones-img">
                                <img class="fotoExito" src="assets/images/icons/pedidos.svg">
                            </div>
                            <div class="col-9 fix-cm ">
                                <div class="eliminar-carrito">
                                    <img src="assets/images/icons/check.svg">
                                </div>
                                <h2>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</h2>
                                <h1>{{ $order->id }}</h1>
                                <p>{{ $order->total }} PUNTOS | 1 PREMIO <br> ID: {{ $order->id }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
          @endif
      </div>
  </div>
</section>
@endsection
