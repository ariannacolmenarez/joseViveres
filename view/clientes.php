<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel7">Clientes </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" id="buscadorcliente" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="list-group list-group-flush mt-2" id="cliente">

                </div>
                <?php if(in_array("Crear Clientes", $_SESSION['permisos'])){ ?>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button" data-bs-target="#exampleModalToggle9" data-bs-toggle="modal">Crear cliente</button>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

          <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel8" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel7">Modificar Cliente </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <input type="hidden" id="idcliente">
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombrecliente">
                </div>
                <h5 class="mt-3">Teléfono *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="telefonocliente">
                </div>
                <h5 class="mt-3">Documento <small>(opcional)</small></h5>
                <div class="input-group ">
                    <select class="input-group-text" aria-label="Default select example" id="doc_cliente">
                        <option selected value="1">CI</option>
                        <option value="2">RIF</option>
                        <option value="3">Otro</option>
                    </select>
                    <input type="hidden" id="tipo">
                    <input type="text" id="nro_doccliente" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <h5 class="mt-3">Comentario<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción" id="comentariocliente" style="height: 100px"></textarea>
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button onclick="guardarCliente();" class="btn btn-success w-100" type="button">Guardar Cambios</button>
                </div>
                <?php if(in_array("Eliminar Clientes", $_SESSION['permisos'])){ ?>
                <div class="d-grid gap-2 d-md-block w-100 mt-3">
                  <button onclick="eliminarCliente();" class="btn btn-danger w-100" type="button">Eliminar Cliente</button>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel9" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel9"><a type="button" id="volver9" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a> Registrar Cliente</i></h5>
              </div>
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombreCliente" >
                </div>
                <h5 class="mt-3">Teléfono *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="telefonoC" >
                </div>
                <h5 class="mt-3">Documento <small>(opcional)</small></h5>
                <div class="input-group ">
                    <select class="input-group-text" aria-label="Default select example" id="tipo_docC">
                        <option selected value="1">CI</option>
                        <option value="2">RIF</option>
                        <option value="3">Otro</option>
                    </select>
                    <input type="text" id="nro_docC" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <h5 class="mt-3">Comentario<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea id="comentarioC" class="form-control" placeholder="Ingresa una descripción"  id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button onclick="registrarCliente();" class="btn btn-success w-100" type="button">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <script src="<?= _THEME_?>js/scripts/clientes.js"></script>