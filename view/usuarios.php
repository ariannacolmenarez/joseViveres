<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle14" aria-hidden="true" aria-labelledby="exampleModalToggleLabel14" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel14">usuarios </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" id="" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="list-group list-group-flush mt-2" id="usuarios2">

                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button" data-bs-target="#exampleModalToggle15" data-bs-toggle="modal">Crear usuarios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

              <div class="modal fade" id="exampleModalToggle16" aria-hidden="true" aria-labelledby="exampleModalToggleLabel16" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel16"><a type="button" id="volver16" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a>  Editar usuarios</i></h5>
              </div>
              <input type="hidden" id="idusuarios">
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombre1">
                </div>
                <h5 class="mt-3">correo *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="correo" data-bs-whatever="@gmail">
                </div>
                <h5 class="mt-3">Rol de usuario*</h5>
                <div class="input-group mt-1">
                  <select class="form-select  rounded-0" >
                  <option selected>Elige el rol</option>
                  <option value="1">vendeor</option>
                  <option value="2">charcuteria</option>
                  <option value="3">carnes</option>
                  </select>
              </div>
                <hr>
                <h4 class="mt-3"> <b>Cambiar contraseña</b></h4>
                <hr>
                <h5 class="mt-3">Nueva contraseña </h5>

               <div class="input-group mt-1">
                  <input type="password" value="" class="form-control" id="contraseña">
               </div>
               <h5 class="mt-3">Confirmar contraseña </h5>

                  <div class="input-group mt-1">
                    <input type="password" value="" class="form-control" id="contraseña">
                  </div>
                  <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button onclick="guardarUsuarios();" class="btn btn-success w-100" type="button">Guardar Cambios</button>
                    </div>
                    <div class="d-grid gap-2 d-md-block w-100 mt-3">
                      <button onclick="eliminarCliente();" class="btn btn-danger w-100" type="button">Eliminar Cliente</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <div class="modal fade" id="exampleModalToggle15" aria-hidden="true" aria-labelledby="exampleModalToggleLabel15" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel15"><a type="button" id="volver15" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a> Nuevo usuario</i></h5>
              </div>
              <div class="modal-body">
                <h5 class="mt-3">Nombre *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombre3" >
                </div>
                <h5 class="mt-3">correo *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="correo2" data-bs-whatever="@gmail">
                </div>
                <h5 class="mt-3">contraseña *</h5>
                <div class="input-group mt-1">
                  <input type="password" value="" class="form-control" id="contraseña1">
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button onclick="registrarUsuarios();" class="btn btn-success w-100" type="button">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <script src="<?= _THEME_?>js/scripts/usuario.js"></script>