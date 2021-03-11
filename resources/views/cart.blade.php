@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row wall-titulos">
            <h1>MI CARRITO<span class="color-dot">.</span></h1>
            <p>
                En esta sección encontrarás los productos que deseas canajear.
            </p>
        </div>

        <div class="row wall-principal">
            <div class="col-12">
                <div class="preciopremio">
                    <h2>{{ $cart->total }}<small> PUNTOS</small></h2>
                </div>
            </div>
            {{-- {{dd($cart->items)}} --}}
            @if ($cart->items)
                @foreach ($cart->items as $i => $item)
                {{-- {{dd($item)}} --}}
                <div class="row-list-misiones wow bounceIn animated" style="visibility: visible">
                    <div class="row">
                        <div class="col-3 row-list-misiones-img">
                            <img class="fotoExito" src="{{ $item['image'] }}"/>
                        </div>
                        <div class="col-9 fix-cm">
                            <div class="eliminar-carrito">
                                <a href="/remove-from-cart/{{$i}}">
                                    <img src="assets/images/icons/cancel.svg" />
                                </a>
                            </div>
                            <h2>EN STOCK</h2>
                            <h1>{{ $item['title'] }}</h1>
                            <p>{{ $item['price'] }} PUNTOS</p>
                        </div>
                    </div>
                </div>  
                @endforeach
            @endif
        </div>

        <div class="col-12 row">
            <div class="col-6 regreso">
                <a href="/prizes">
                    <div class="generar">VER MÁS</div>
                </a>
            </div>

            <div class="col-6 acciones">
                @if ($cart->total > 0 && $points >= $cart->total)
                <a href="/newOrder">
                    <div class="generar">GENERAR PEDIDO</div>
                </a>
                @endif
            </div>
        </div>
    </div>
</section>    
@endsection
