@extends('layouts.app')

@section('content')
    <section class="interiores">
        <div class="container">
        
            @if ($mission)
            <a href="/missions/{{ $mission->id }}">
                <div class="row wall-principal">
                    <div class="col-12 mision">
                        <div class="col-12">
                            <h1 class="titles">CONOCE LA ÚLTIMA MISIÓN</h1>
                        </div>
                        <img src="{{ asset($mission->image) }}" />
                    </div>
                </div>
            </a>
            @endif

            <div class="row wall-secundario">
            
                <div class="col-12">
                    <div class="col-12">
                        <h1 class="titles">NOTICIAS Y MÁS</h1>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 comunicacion">
                            <img src="assets/images/comunica.jpg" />
                        </div>

                        <div class="col-xs-4 col-sm-4 comunicacion">
                            <img src="assets/images/comunica.jpg" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="row wall-secundario">
                <div class="col-12">
                    <div class="col-12">
                        <h1 class="titles">NUEVOS PREMIOS</h1>
                    </div>

                    <div class="row">
                        @if ($prizes)
                            @foreach ($prizes as $item)
                                <div class="col-xs-4 col-sm-4 comunicacion">
                                    <a href="/prizes/{{$item->id}}">
                                        <img src="{{ $item->image }}" />
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection