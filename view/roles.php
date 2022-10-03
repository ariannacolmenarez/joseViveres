<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle19" aria-hidden="true" aria-labelledby="exampleModalToggleLabel19" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel19">Agregar Rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombreR" >
                </div>
                <h5 class="mt-3">Descripción<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción"  style="height: 100px" id="descripcionR"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-success w-100" type="button" onclick="registrarRol();">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

              <div class="modal fade" id="exampleModalToggle20" aria-hidden="true" aria-labelledby="exampleModalToggleLabel20" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel20"> Editar Rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <input type="hidden" id="idRol">
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombreRol">
                </div>
                <h5 class="mt-3">Descripción<small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción" id="descripcionRol" style="height: 100px"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-success w-100" type="button" onclick="guardarRol();">Guardar Cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
             