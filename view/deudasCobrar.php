        <div class="modal fade" id="exampleModalToggle13" aria-hidden="true" aria-labelledby="exampleModalToggleLabel13" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                  <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel13">Deuda Por Cobrar </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <h5 class="m-auto p-2"id="nombreC"></h5>
              <div class="card m-auto mt-1 p-3" style="width: 18rem;">
                <p class="card-title text-md-center text-dark text-xl-left"><span class="badge bg-success rounded-pill" id="cantC"></span> Deudas</p>
                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"id="montoC"></h3>
                  <i class="ti-money icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                </div>
              </div> 
              <div class="modal-body">
                <div class="list-group list-group-flush mt-2" id="lista_cobrar">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

        <div class="modal fade" id="exampleModalToggle14" aria-hidden="true" aria-labelledby="exampleModalToggleLabel14" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel14">Resumen </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card m-auto mt-2" style="width: 20rem;">
                <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <b>Fecha:</b><small id="fechC"></small>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <b>Contacto:</b><small id="nameC"></small>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <b>Total:</b><small id="valueC"></small>
                      </div>
                  </div>
                </div>
              </div> 
              <input type="hidden" id="id">
              <div class="modal-body">
                <table class="table" id="table">
                  
                </table>
              </div>
              <div class="modal-footer">
                <div class="d-grid gap-2 d-md-block w-100">
                  <div class="row text-center">
                    <div class="col">
                      <button class="btn btn-danger btn-rounded btn-icon">
                      <i class="ti-trash"></i> 
                      </button><br><small class="text-danger">Eliminar</small>
                    </div>
                    <div class="col">
                      <button class="btn btn-secondary btn-rounded btn-icon">
                      <i class="ti-receipt"></i>
                      </button><br><small class="text-secondary">Comprobante</small>
                    </div>
                    <div class="col">
                      <button class="btn btn-success btn-rounded btn-icon" id="abonoC">
                      <i class="ti-money"></i>
                      </button><br><small class="text-success">Abonar</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->


       