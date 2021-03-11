@extends('layouts.app')

@section('content')
<section>
    <div class="container">

    <div class="row wall-titulos">
        <h1>ESTADO DE CUENTA<span class="color-dot">.</span></h1>
        <p>Encontrarás todos los moviemientos de tus puntos realizados como ingreso y egreso de puntos.</p>
    </div>


      <div class="row wall-principal">
        @if ($transactions)
            @foreach ($transactions as $transaction)
                <div class="row-list-misiones wow bounceIn animated" style="visibility: visible;">
                    @if ($transaction->out)
                        <a href="/orders/{{$transaction->transaction_id}}">
                    @else
                    <a href="/missions/{{$transaction->transaction_id}}">
                    @endif
                        <div class="row">
                            <div class="col-2 row-list-misiones-img">
                                @if ($transaction->out)
                                    <img class="fotoExito" src="assets/images/icons/subtract.svg">
                                @else
                                    <img class="fotoExito" src="assets/images/icons/add.svg">
                                @endif
                            </div>
                            <div class="col-10 fix-cm ">
                                <h2>{{ \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y') }}</h2>
                                <h1>{{ $transaction->amount }} PUNTOS</h1>
                                @if ($transaction->out)
                                    <p>CANJE DE PUNTOS PEDIDO {{ $transaction->transaction_id }}</p>
                                @else
                                    <p>ABONO DE PUNTOS MISIÓN  {{ $transaction->transaction_id }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>      
            @endforeach
        @endif
              
  </div>
</section>
@endsection
