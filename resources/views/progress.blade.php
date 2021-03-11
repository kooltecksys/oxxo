@extends('layouts.app')

@section('content')
<section>
  <div class="container">

     
      <div class="row wall-titulos">
          <h1>MIS AVANCES<span class="color-dot">.</span></h1>
          <p>En esta sección encontrarás el estatus de todas tus participaciones. Recuerda que se actualizan los martes y viernes a primera hora.</p>
      </div>

      @if ($objectives)
        @foreach ($objectives as $item)
        <div class="row wall-principal">
            <a href="/progress-detail" class="row-list-status wow bounceIn animated" style="visibility: visible;">
  
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset($item->image) }}">
                    </div>
                    <div class="col-9">
                        <h1>{{ $item->product }}</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <h2 class="azulpg">{{ $item->base }}</h2>
                        <h3 style="margin-top: 10px;">BASE</h3>
                    </div>
  
                    <div class="col-4 separator">
                        <h2 class="azulpg">{{ $item->goal }}</h2>
                        <h3 style="margin-top: 10px;">OBJETIVO</h3> 
                    </div>
  
                    <div class="col-4 separator">
                        <h2 class="azulpg">{{ $item->progress }}</h2>
                        <h3 style="margin-top: 10px;">AVANCE</h3>
                    </div>
                </div>
  
                <div class="col-12">
                    <div class="progress pg-progress" style="margin-top: 10px;">
                        <div class="progress-bar bgazulpg" role="progressbar" style="color: transparent; width: {{ ($item->progress*100)/$item->goal }}%;" aria-valuenow="36.2" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="info-porcentaje">Porcentaje de cumplimiento: <span class="color-dot">{{ floor(($item->progress*100)/$item->goal) }}%</span><br>Actualización: <span class="color-dot">{{ $item->created_at }}</span></div>                   
                </div>
              </a>
            </div>
        @endforeach
      @endif
        
        

      
      <!-- FIXED -->
          <div class="fixed-tab"></div>
      <!-- END FIXED -->



  </div>
</section>
@endsection