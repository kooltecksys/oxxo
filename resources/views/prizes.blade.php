@extends('layouts.app')

@section('content')
<section>
  <div class="container">

     
      <div class="row wall-titulos">
          <h1>MIS PREMIOS<span class="color-dot">.</span></h1>
          <p>En esta sección encontrarás el avance de tu tienda OXXO. Recuerda que lograr las misiones te dará más puntos.</p>
      </div>


      <div class="row wall-principal">

          <div class="col-12" style="margin-bottom: 20px; text-align: center;">
              <select class="select-categoria">
                  <option>FILTRAR POR CATEGORIA</option>
              </select>
          </div>

      </div>


      
      <div class="row">
          
          <div class="col-12">
              <div class="col-12">
                  <h1 class="titlespremios">LO MÁS NUEVO <a href="#"><span>VER TODOS</span></a></h1>
              </div>

              <div class="row">
                @if ($latest)
                    @foreach ($latest as $item)
                        <div class="col-xs-6 col-sm-6 promowall">
                            <a class="promowall" href="/prizes/{{ $item->id }}">
                                <img src="{{ asset($item->image) }}" />
                            </a>
                        </div>
                    @endforeach
                @endif
              </div>
          </div>

      </div>

          <div class="row">
              <div class="col-12">
                  <div class="col-12">
                      <h1 class="titlespremios">TECNOLOGÍA <a href="#"><span>VER TODOS</span></a></h1>
                  </div>

                  <div class="row">
                    @if ($tech)
                        @foreach ($tech as $item)
                            <div class="col-xs-4 col-sm-4 premioswall">
                                <a class="promowall" href="/prizes/{{ $item->id }}">
                                    <img src="{{ asset($item->image) }}" />
                                </a>
                            </div>
                        @endforeach
                    @endif
                  </div>
              </div>
          </div>

          <div class="row">
          
              <div class="col-12">
                  <div class="col-12">
                      <h1 class="titlespremios">HOGAR <a href="#"><span>VER TODOS</span></a></h1>
                  </div>

                  <div class="row">
                    @if ($home)
                        @foreach ($home as $item)
                            <div class="col-xs-4 col-sm-4 premioswall">
                                <a class="promowall" href="/prizes/{{ $item->id }}">
                                    <img src="{{ asset($item->image) }}" />
                                </a>
                            </div>
                        @endforeach
                    @endif
                  </div>
              </div>
          </div>


          <div class="row">
          
              <div class="col-12">
                  <div class="col-12">
                      <h1 class="titlespremios">ENTRETENIMIENTO <a href="#"><span>VER TODOS</span></a></h1>
                  </div>

                  <div class="row">
                    @if ($entertainment)
                        @foreach ($entertainment as $item)
                            <div class="col-xs-4 col-sm-4 premioswall">
                                <a class="promowall" href="/prizes/{{ $item->id }}">
                                    <img src="{{ asset($item->image) }}" />
                                </a>
                            </div>
                        @endforeach
                    @endif
                  </div>
              </div>
          </div>
      </div>

      <div class="row"></div>

      
      <!-- FIXED -->
          <div class="fixed-tab"></div>
      <!-- END FIXED -->



  </div>
</section>
@endsection