@extends('layouts.app')

@section('content')
<section>
  <div class="container">

      <div class="row wall-titulos">
          <h1>MISIONES<span class="color-dot">.</span></h1>
          <p>En esta sección encontrarás el estatus de todas tus participaciones. Recuerda que se actualizan los martes y viernes a primera hora.</p>
      </div>
      
      @if ($missions)
        @foreach ($missions as $mission)
        <a href="/missions/{{ $mission->id }}">
            <div class="row wall-misiones">
                <div class="row-list-misiones wow bounceIn animated" style="visibility: visible;">

                    <div class="row">
                        
                        <div class="col-3 row-list-misiones-img">
                            <img src="{{ asset($mission->image) }}" />
                        </div>
                        <div class="col-9 fix-cm">
                            <div class="check-mision">
                                <img src="assets/images/icons/check.svg">
                            </div>
                            <h2>{{ $mission->validity_date }}</h2>
                            <h1>{{ $mission->title }}</h1>
                            <p>{{ $mission->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
      @endif

       <!-- FIXED -->
       <div class="fixed-tab"></div>
       <!-- END FIXED -->


  </div>
</section>

<div class="exit-gradient"></div>
   

<!-- Modal HTML -->
<div id="mision" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title title-mision">Nueva MISIÓN</h5>
        </div>
        <div class="modal-body">
            <p class="text-mensaje">{{$last->description}}</p>
            <img src="{{ asset($last->image) }}" />
        </div>
        <div class="modal-footer">
            <button onclick="location.href='/missions/{{ $last->id }}'" type="button" class="btn btn-secondary" data-bs-dismiss="modal">VER MISIÓN</button>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "scrollY": 200,
            "scrollX": true
        });
    });
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    window.onscroll = function () { myFunction() };

    var header = document.getElementById("homeHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script>
    $( document ).ready(function() {
    $('#mision').modal('toggle')
});
</script>
@endsection