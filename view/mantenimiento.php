<?php
     require_once "../content/component/header.php"
     ?>
     <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row py-0">
                <div class="col-lg-10 col-sm-8 col-9 grid-margin mb-0">
                    <h2 class="font-weight-bold text-dark pt-2 m-0">Mantenimiento</h2>
                </div>
            </div>
            <hr>
            <div class="row w-75 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row align-center">
                        <div class="col-lg-6 col-md-6 col-xs-12 text-center py-2 ">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-copy fa-9x text-muted"></i>
                                    <h5 class="mt-2 text-dark fs-4">Respaldar Base de Datos</h5>
                                    <small>Crear un archivo de respaldo con la información de la base de datos</small>
                                    <a><button  class="mt-2 btn btn-outline-warning w-100">Respaldo</button></a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 text-center py-2 ">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-trash-restore fa-9x text-muted"></i>
                                    <h5 class="mt-2 fs-4 text-dark">Restaurar Base de Datos</h5>
                                    <small>Cargar la base de datos desde una copia de seguridad creada anteriormente</small>
                                    <button class="mt-2 btn btn-outline-warning w-100" data-bs-target="#exampleModalToggle21" data-bs-toggle="modal">Restaurar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        <!-- content-wrapper ends -->    
        <div class="modal fade" id="exampleModalToggle21" aria-hidden="true" aria-labelledby="exampleModalToggleLabel21" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel21">Restaurar Base de Datos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card">
                    <div class="card-body text-center">
                        <label class="fs-5 text-muted mb-2 ">Seleccione un archivo</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>seleccione</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="d-grid gap-2 d-md-block w-100 mt-3">
                            <button class="btn btn-warning w-100" type="button" >Restaurar</button>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
        
 <?php
 require_once "../content/component/footer.php";
 ?>

