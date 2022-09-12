<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel10" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel10">Proveedores </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="list-group list-group-flush mt-2">
                    <a type="button" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" class="list-group-item text-dark list-group-item-action py-3">
                      <div class="row align-items-center">
                        <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                        <div class="col px-4">Maria Ramones <small class="text-muted">+58426553442</small></div>
                        <div class="col text-end"><i class="ti-marker-alt "></i></div>
                      </div> 
                    </a>
                    <a type="button" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" class="list-group-item text-dark list-group-item-action py-3">
                      <div class="row align-items-center">
                        <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                        <div class="col px-4">Maria Ramones <small class="text-muted">+58426553442</small></div>
                        <div class="col text-end"><i class="ti-marker-alt "></i></div>
                      </div> 
                    </a>
                    <a type="button" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" class="list-group-item text-dark list-group-item-action py-3">
                      <div class="row align-items-center">
                        <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                        <div class="col px-4">Maria Ramones <small class="text-muted">+58426553442</small></div>
                        <div class="col text-end"><i class="ti-marker-alt "></i></div>
                      </div> 
                    </a>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button" data-bs-target="#exampleModalToggle12" data-bs-toggle="modal">Crear Proveedor</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

              <div class="modal fade" id="exampleModalToggle11" aria-hidden="true" aria-labelledby="exampleModalToggleLabel11" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel11"><a type="button" data-bs-target="#exampleModalToggle10" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a>  Editar Proveedor</i></h5>
              </div>
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" value="Maria Ramones">
                </div>
                <h5 class="mt-3">Teléfono *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" value="Maria Ramones">
                </div>
                <h5 class="mt-3">Documento <small>(opcional)</small></h5>
                <div class="input-group ">
                    <select class="input-group-text" aria-label="Default select example">
                        <option selected value="1">CI</option>
                        <option value="2">RIF</option>
                        <option value="3">Otro</option>
                    </select>
                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <h5 class="mt-3">Comentario<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-success w-100" type="button">Guardar Cambios</button>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-3">
                  <button class="btn btn-danger w-100" type="button">Eliminar Cliente</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <div class="modal fade" id="exampleModalToggle12" aria-hidden="true" aria-labelledby="exampleModalToggleLabel12" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel12"><a type="button" data-bs-target="#exampleModalToggle10" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a> Nuevo Proveedor</i></h5>
              </div>
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" >
                </div>
                <h5 class="mt-3">Teléfono *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" >
                </div>
                <h5 class="mt-3">Documento <small>(opcional)</small></h5>
                <div class="input-group ">
                    <select class="input-group-text" aria-label="Default select example">
                        <option selected value="1">CI</option>
                        <option value="2">RIF</option>
                        <option value="3">Otro</option>
                    </select>
                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <h5 class="mt-3">Comentario<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button onclick="guardarProveedor();" class="btn btn-success w-100" type="button">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <script src="<?= _THEME_?>js/scripts/proveedores.js"></script>