<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel3">Crear Categoría <i class="ti-tag"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h5 class="mt-2">Nombre de la categoría *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control form-control-lg" id="nombreC">
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button" onclick="registrarCategorias();" >Crear categoría</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel5">Editar Categorías <i class="ti-tag"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="list-group list-group-flush mt-2" id="list_cat">
                    
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button">Crear categoría</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->

              <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel6"><a type="button" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal"><i class="ti-arrow-left"></i> </a>  Editar Categoría</i></h5>
              </div>
              <input type="hidden" id="idcatE">
              <div class="modal-body">
                <h5 class="mt-2">Nombre de la categoría *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" id="nombrecatE">
                </div>
                <hr>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 mt-1" type="search" placeholder="Buscar producto" aria-label="Search">
                </form>
                <div class="list-group list-group-flush mt-3" id="list_prod">
                    
                   
                </div>
      
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-success w-100" type="button">Guardar Cambios</button>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-3">
                  <button class="btn btn-danger w-100" type="button">Eliminar Categoría</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
        <script src="<?= _THEME_?>js/scripts/categorias.js"></script>