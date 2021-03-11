@extends('layouts.app')

@section('content')
<section>
  <div class="container">

      <div class="row wall-titulos">
          <h1>MISIÓN<span class="color-dot">.</span></h1>
          <h3><span class="color-dot">"</span>{{ $mission->title }}<span class="color-dot">"</span></h3>
          <p>{{ $mission->description }}</p>
          
     
      </div>


      <div class="row wall-lamision">
          <div class="codigoActivacion">
              <h2>CÓDIGO</h2>
             <h1>{{ $mission->code }}</h1> 
          </div>

          <h1 class="titles">Foto de éxito</h1>
          <img class="fotoExito" src="{{ asset($mission->image) }}">

      </div>
      
      
      <form class="row wall-lamision" method="POST" action="/missions-done" enctype="multipart/form-data" name="done-mission">
            @csrf
          {{-- <input id="" type="file" required onchange="readURL(this);" /> --}}
          
          <input type="file" id="upload" name="upload" >
          <img id="preview" src="" style="margin-top:5px;"/>

          <input type="text" id="user_id" name="user_id" value="{{ auth()->user()->id }}" style="display: none;">
          <input type="text" id="mission_id" name="mission_id" value="{{ $mission->id }}" style="display: none;">
          <input type="text" id="oxxo_id" name="oxxo_id" value="{{ auth()->user()->profile->oxxo_id }}" style="display: none;">
          {{-- <input type="text" id="photo" name="photo" style="display: none;"> --}}
          <input type="text" id="longitude" name="longitude" style="display: none;">
          <input type="text" id="latitude" name="latitude" style="display: none;">
          <input type="number" id="points" name="points" value="{{ $mission->value }}" style="display: none;">

          <button class="btn" type="submit">Enviar</button>
      </form>
        

      <!-- FIXED -->
      <div class="fixed-tab"></div>
      <!-- END FIXED -->




  </div>
</section>
<script src="{{ asset('assets/js/jquery-3.5.1.js')}}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            console.log(input.files[0]['name']);
            // $('#photo').val('uploads/'+input.files[0]['name']);
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#upload").change(function(){
        readURL(this);
        $('#latitude').val('19.3105696');
        $('#longitude').val('-99.3594173');
        if (navigator.geolocation) {
            // navigator.geolocation.getCurrentPosition(showPosition);
        }
    });

    function showPosition(position) {
        $('#latitude').val(position.coords.latitude);
        $('#longitude').val(position.coords.longitude);
    }
</script>
@endsection