<!-- modal venta -->

        <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel4">Registrar productos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="#" enctype="multipart/form-data" id="form">
                  <div class="row ">
                    <div class="display-img-vid-con">
                      <div class=" mx-auto" style="width: 8rem;">
                        <img src="" id="preview-img" class="card-img-top" >
                      </div>
                    </div>
                    <h5 class="mt-2">Elige una imagen</h5>
                    <div class="input-group mb-3">
                      <input type="file" placeholder="Elige una imagen" class="form-control" accept="image/*" name="img-vid" id="inp-img-vid">
                    </div>
                    <h5 class="mt-2">Nombre del producto *</h5>
                    <div class="input-group mt-1">
                      <input type="text" class="form-control" placeholder="Ej: Azucar Montalban" id="nombrep">
                    </div>
                    <h5 class="mt-3">Cantidad disponible *</h5>
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary" type="button" id="minus"><i class="fa-solid fa-circle-minus"></i></button>
                      <input type="text" class="form-control text-center" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" id="cantidadp">
                      <button class="btn btn-outline-secondary" type="button" id="plus"><i class="fa-solid fa-circle-plus"></i></button>
                    </div>
                    <h5 class="mt-3">Costo Unitario del producto *</h5>
                    <div class="input-group ">
                      <input type="text" class="form-control" placeholder="Ej: 1000" id="costop">
                    </div>
                    <h5 class="mt-3">Precio del producto *</h5>
                    <div class="input-group ">
                      <input type="text" class="form-control" placeholder="Ej: 2000" id="preciop">
                    </div>
                    <div class="mt-2 form-group ">
                          <h5>Busca una categoría </h5>
                          <select class="form-select  mb-3 shadow-none" aria-label=".form-select example" id="cat_prod">

                          </select>
                    </div>
                      <h5>Descripción <small>(opcional)</small></h5>
                    <div class="input-group mt-2">
                      <textarea class="form-control" id="descripcionp" placeholder="Ingresa una descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-block w-100 mt-5">
                      <button class="btn btn-success w-100" type="button" onclick="registrarProducto();">Registrar producto</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
        <!-- modal venta -->

        <div class="modal fade" id="editarProd" aria-hidden="true" aria-labelledby="editarProdLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="editarProdLabel">Modificar producto </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="#" enctype="multipart/form-data">
                  <input type="hidden" id="idE">
                  <div class="row ">
                    <div class="display-img-vid-con">
                      <div class=" mx-auto" style="width: 8rem;">
                        <img src="" id="preview-imgE" class="card-img-top" >
                      </div>
                    </div>
                    <h5 class="mt-2">Elige una imagen</h5>
                    <div class="input-group mb-3">
                      <input type="file" placeholder="Elige una imagen" class="form-control" accept="image/*" name="img-vid" id="inp-img-vidE">
                    </div>
                    <h5 class="mt-2">Nombre del producto *</h5>
                    <div class="input-group mt-1">
                      <input type="text" class="form-control" placeholder="Ej: Azucar Montalban" id="nombreE">
                    </div>
                    <h5 class="mt-3">Cantidad disponible *</h5>
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary" type="button" id="minusE"><i class="fa-solid fa-circle-minus"></i></button>
                      <input type="text" class="form-control text-center" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" id="cantidadE">
                      <button class="btn btn-outline-secondary" type="button" id="plusE"><i class="fa-solid fa-circle-plus"></i></button>
                    </div>
                    <h5 class="mt-3">Costo Unitario del producto *</h5>
                    <div class="input-group ">
                      <input type="text" class="form-control" placeholder="Ej: 1000" id="costoE">
                    </div>
                    <h5 class="mt-3">Precio del producto *</h5>
                    <div class="input-group ">
                      <input type="text" class="form-control" placeholder="Ej: 2000" id="precioE">
                    </div>
                    <div class="mt-2 form-group ">
                          <h5>Busca una categoría </h5>
                          <select class="form-select  mb-3 shadow-none" aria-label=".form-select example" id="cat_prodE">

                          </select>
                    </div>
                      <h5>Descripción <small>(opcional)</small></h5>
                    <div class="input-group mt-2">
                      <textarea class="form-control" id="descripcionE" placeholder="Ingresa una descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-block w-100 mt-5">
                      <button class="btn btn-success w-100" type="button" onclick="guardarProducto();">Guardar Cambios</button>
                    </div>
                    
                    <?php if(in_array("Eliminar Inventario", $_SESSION['permisos'])){ ?>
                    <div class="d-grid gap-2 d-md-block w-100 mt-2">
                      <button class="btn btn-danger w-100" type="button" onclick="eliminarProducto();">Eliminar Producto</button>
                    </div>
                    <?php } ?>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

              <script src="<?= _THEME_?>js/scripts/productos.js"></script>
