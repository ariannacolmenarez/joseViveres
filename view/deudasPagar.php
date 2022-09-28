        
        <div class="modal fade" id="exampleModalToggle17" aria-hidden="true" aria-labelledby="exampleModalToggleLabel17" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                  <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel17">Deuda Por Pagar </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <h5 class="m-auto p-2" id="nombreD"></h5>
              <div class="card m-auto mt-1 p-3" style="width: 18rem;">
                  <p class="card-title text-md-center text-dark text-xl-left"><span class="badge bg-danger rounded-pill" id="cantD"></span> Deudas</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" id="montoD"></h3>
                      <i class="ti-money icon-md text-danger mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
              </div> 
              <div class="modal-body">
                <div class="list-group list-group-flush mt-2"id="lista_pagar">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
        <div class="modal fade" id="exampleModalToggle18" aria-hidden="true" aria-labelledby="exampleModalToggleLabel18" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel18">Resumen </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>       
              <div class="modal-body">
                <div class="card m-auto mt-2" style="width: 25rem;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <small>Concepto:</small><br> <b id="conceptoP"></b> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col">
                          <small>Valor Total:</small><br> <b class="fs-4" id="montoP"></b> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                          <small>Categoría:</small>
                        </div>
                        <div class="col text-end">
                          <b id="categoria"></b>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                          <small>Fecha:</small>
                        </div>
                        <div class="col text-end">
                          <b id="fechaP"></b> 
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                          <small>Método de pago:</small>
                        </div>
                        <div class="col text-end">
                          <b>deuda</b>
                        </div>
                    </div>
                    <input type="hidden" id="id">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="d-grid gap-2 d-md-block w-100">
                  <div class="row text-center">
                      <div class="col">
                        <button onclick="eliminarDP();" class="btn btn-danger btn-rounded btn-icon">
                        <i class="ti-trash"></i> 
                        </button><br><small class="text-danger">Eliminar</small>
                      </div>
                      <div class="col">
                        <button class="btn btn-secondary btn-rounded btn-icon">
                        <i class="ti-receipt"></i>
                        </button><br><small class="text-secondary">Comprobante</small>
                      </div>
                      <div class="col">
                        <button class="btn btn-success btn-rounded btn-icon"id="abonoP">
                        <i class="ti-money"></i>
                        </button><br><small class="text-success" >Abonar</small>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
<?php 
require_once("view/abono.php");
?>
        

        
              