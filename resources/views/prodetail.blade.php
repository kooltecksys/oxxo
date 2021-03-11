@extends('layouts.app')

@section('content')
<section>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="col-12 User">
                  <img class="principalAvatar" src="{{ asset('assets/images/avatar.jpg')}}" />
                  <p class="nombreUsuario">Marcela Guerrero</p>
              </div>
              <h1 class="avance">AVANCE DE PRODUCTO</h1>
              <div class="col-12 Productos">
                  <img class="principalProducto" src="{{ asset('assets/images/productos/SNK-001-KLT.png') }}" />
                  <p class="nombreProducto">SNICKERS ALMOND SKU: 01019920</p>
              </div>
              <table id="tableDetalle" class="display nowrap" style="width:100%">
                  <thead>
                      <tr>
                          <th>FECHA</th>
                          <th>PUNTOS</th>
                          <th>AVANCE</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>02/02/2021</td>
                          <td>
                              <div class="puntos col-12">
                                  <div>
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">850</p>
                                      <p>META</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">255</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar puntos" role="progressbar" style="width: 50%;"
                                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">255</div>
                              </div>
                          </td>
                          <td>
                              <div class="puntos col-12">
                                  <div class="col-4">
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">10000</p>
                                      <p>META</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">800</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar avances" role="progressbar" style="width: 75%;"
                                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>02/02/2021</td>
                          <td>
                              <div class="puntos col-12">
                                  <div>
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">850</p>
                                      <p>META</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">255</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar puntos" role="progressbar" style="width: 50%;"
                                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">255</div>
                              </div>
                          </td>
                          <td>
                              <div class="puntos col-12">
                                  <div class="col-4">
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">10000</p>
                                      <p>META</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">800</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar avances" role="progressbar" style="width: 75%;"
                                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>02/02/2021</td>
                          <td>
                              <div class="puntos col-12">
                                  <div>
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">850</p>
                                      <p>META</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">255</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar puntos" role="progressbar" style="width: 50%;"
                                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">255</div>
                              </div>
                          </td>
                          <td>
                              <div class="puntos col-12">
                                  <div class="col-4">
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">10000</p>
                                      <p>META</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">800</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar avances" role="progressbar" style="width: 75%;"
                                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>02/02/2021</td>
                          <td>
                              <div class="puntos col-12">
                                  <div>
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">850</p>
                                      <p>META</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">255</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar puntos" role="progressbar" style="width: 50%;"
                                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">255</div>
                              </div>
                          </td>
                          <td>
                              <div class="puntos col-12">
                                  <div class="col-4">
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">10000</p>
                                      <p>META</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">800</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar avances" role="progressbar" style="width: 75%;"
                                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>02/02/2021</td>
                          <td>
                              <div class="puntos col-12">
                                  <div>
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">850</p>
                                      <p>META</p>
                                  </div>
                                  <div>
                                      <p class="cantidad">255</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar puntos" role="progressbar" style="width: 50%;"
                                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">255</div>
                              </div>
                          </td>
                          <td>
                              <div class="puntos col-12">
                                  <div class="col-4">
                                      <p class="cantidad">100</p>
                                      <p>BASE</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">10000</p>
                                      <p>META</p>
                                  </div>
                                  <div class="col-4">
                                      <p class="cantidad">800</p>
                                      <p>VENTA</p>
                                  </div>
                              </div>
                              <div class="progress">
                                  <div class="progress-bar avances" role="progressbar" style="width: 75%;"
                                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
@endsection