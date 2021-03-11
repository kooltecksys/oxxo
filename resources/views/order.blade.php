@extends('layouts.app')

@section('content')
<section>
  <div class="container">

      <div class="row wall-titulos">
          <h1>PEDIDO GMO-{{ $order->id }}<span class="color-dot">.</span></h1>
          <p class="descripcion-premio">Encuentra los detalles de tu pedido, recuerda que estará llegando en aproximadamente 15 días hábiles. </p>
      </div>


      <h1 class="titles" style="margin-top:15px">PREMIOS EN LA ÓRDEN</h1>

      @if ($products)
          @foreach ($products as $item)
          <div class="row-list-misiones wow bounceIn animated" style="visibility: visible;">

                <div class="row">
                    
                    <div class="col-3 row-list-misiones-img">
                        <img class="fotoExito" src="{{ asset($item->image) }}">
                    </div>
                    <div class="col-9 fix-cm ">
                        <h2>EN STOCK</h2>
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->price }} PUNTOS</p>
                    </div>
                </div>
    
            </div>
          @endforeach
      @endif

      

      <div class="row wall-lamision">
          <h1 class="titles" style="margin-top:15px">INFORMACIÓN</h1>
          <p class="descripcion-premio">
              <b>• FECHA DE PEDIDO:</b> {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}<br>
              <b>• PUNTOS TOTALES:</b> {{ $order->total }} PUNTOS<br>
              <b>• NÚMERO DE ÓRDEN:</b> GMO-{{ $order->id }}<br>
              <b>• ID SEGUIMIENTO:</b> 3234553498<br>
          </p>
      </div>
      
      
      <!-- FIXED -->
      <div class="fixed-tab"></div>
      <!-- END FIXED -->




  </div>
</section>
@endsection
