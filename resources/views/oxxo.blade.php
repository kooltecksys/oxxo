@extends('layouts.app')

@section('content')
<section>
  <div class="container">

     
      <div class="row wall-titulos">
          <h1>MI OXXO<span class="color-dot">.</span></h1>
          <p>En esta sección encontrarás el avance de tu tienda OXXO. Recuerda que lograr las misiones te dará más puntos.</p>
      </div>


      <div class="row wall-principal">

          <div class="row-list-status wow bounceIn animated" style="visibility: visible;">
              <h1 class="titles">Avances de Mi OXXO</h1>


              <div class="row">
                  <div class="col-4">
                      <h2 class="azulpg">12º</h2>
                      <h3 style="margin-top: 10px;">LUGAR </h3> 
                      

                  </div>

                  <div class="col-4 separator">
                      <h2 class="azulpg">30%</h2>
                          <h3 style="margin-top: 10px;">AVANCE  </h3> 
                                      </div>

                  <div class="col-4 separator">
                      <h2 class="azulpg">3,950</h2>
                      <h3 style="margin-top: 10px;">PUNTOS </h3> 
                  </div>
              </div>

  
              <div class="col-12">
                  <div class="progress pg-progress" style="margin-top: 10px;">
                  
                      <div class="progress-bar bgazulpg" role="progressbar" style="color: transparent; width: 36.2%;" aria-valuenow="36.2" aria-valuemin="0" aria-valuemax="100">37%</div>
                      
                  </div>
                  <div class="info-porcentaje">Porcentaje de cumplimiento: <span class="color-dot">36.2%</span><br>Actualización: <span class="color-dot">28 de Febrero</span></div>
                 
              </div>

              
          </div>

          <div class="col-12">
              <h1 class="titles">Los productos más vendidos</h1>

              <div class="row row-list-status">
                  <div class="col-3">
                      <img src="assets/images/productos/SNK-001-KLT.png">
                      <h3 style="margin-top: 10px;">4,500 </h3> 
                  </div>

                  <div class="col-3">
                      <img src="assets/images/productos/SNK-008-KLT.png">
                          <h3 style="margin-top: 10px;">2,800  </h3> 
                  </div>

                  <div class="col-3">
                      <img src="assets/images/productos/SNK-010-KLT.png">
                      <h3 style="margin-top: 10px;">2,350 </h3> 
                  </div>

                  <div class="col-3">
                      <img src="assets/images/productos/SNK-004-KLT.png">
                      <h3 style="margin-top: 10px;">2,350 </h3> 
                  </div>
              </div>

          </div>


          <div class="col-12">
              <h1 class="titles">Tienda Oxxo Niza</h1>

              <div class="datosTienda">
                  <div class="fotoTienda">
                      <img src="assets/images/tienda.jpg">
                  </div>
                  <div class="infoTienda">
                      <p>Av. Niza, Av. Juárez 20-no 20, Cuauhtémoc, 06600 Ciudad de México, CDMX</p>
                  </div>
              </div>

              
              <div class="mapaTienda">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7525.512837164878!2d-99.16463837526305!3d19.42292764755909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.420443499999998!2d-99.15704219999999!4m5!1s0x85d1ff346cdcdd71%3A0xdc1fb08c76de4c2a!2stienda%20oxxo!3m2!1d19.427408099999997!2d-99.1626797!5e0!3m2!1ses-419!2smx!4v1613666301434!5m2!1ses-419!2smx"
                      height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>

          </div>



      </div>


     

      <div class="row">
         

      </div>

      
      <!-- FIXED -->
          <div class="fixed-tab"></div>
      <!-- END FIXED -->



  </div>
</section>
@endsection