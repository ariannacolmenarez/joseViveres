<?php
     require_once "../content/component/header.php"
     ?>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row py-0">
            <!-- <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center"> -->
                <div class="col-lg-8 col-sm-4 col-6 grid-margin mb-0">
                  <h2 class="font-weight-bold text-dark pt-2 m-0">Inventario</h2>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
                    <button type="button" class=" btn btn-outline-dark mt-2 " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">
                        <b>Crear Categoría</b>
                    </button>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
                  <button type="button" class="text-white btn btn-warning  mt-2 btn-icon-text" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">
                    <i class="ti-plus btn-icon-prepend text-dark"></i><b class="text text-dark">Agregar productos</b>
                  </button>
              </div>
              <!-- </div>
            </div> -->
          </div>
          <hr>
            <div class="row m-0" >
                <div class="col-12">
                    <div class="row ">
                        <div class="col-md-7 grid-margin">
                            <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>    
                        <div class="col grid-margin text-end">
                            <button type="button" class="text-dark btn btn-warning btn-icon-text ">
                                <i class="ti-download btn-icon-prepend"></i><b>Descargar reporte</b>
                            </button>
                        </div>
                    </div>
                    <div class="row align-items-center py-1">
                        <div class="col-md-4">
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 col-6 col-sm-4">
                                            <b><i class="ti-package btn-icon-prepend p-3 bg-light text-secondary rounded fa-2x"></i></b>
                                        </div>
                                        <div class="col-md-9 col-6 col-sm-8">
                                            <h6 class="text-secondary">Total productos</h6>
                                            <h4><b>44</b></h4>
                                        </div>
                                    </div>                                    
                                </div> 
                            </div>
                        </div>
                        <div class="col-8 text-end">
                            <div class="row  text-end">
                                <div class="col p-1">
                                    <button type="button" class=" btn btn-outline-dark " data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">
                                        <b>Editar Categorías</b>
                                    </button>
                                </div>
                                <div class="col-1 text-center text">
                                    <div style="height: 100%;" class=" text-dark vr"></div>
                                </div>
                                <div class="col p-1">
                                    <select class="form-select btn-outline-dark rounded-0" aria-label=".form-select">
                                        <option selected>Ver todas las categorías</option>
                                        <option value="1">Semanalmente</option>
                                        <option value="2">Mensualmente</option>
                                        <option value="3">Anualmente</option>
                                    </select>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-8 row-cols-sm-6 g-3 overflow-auto m-0" style="height: 600px;">
                    <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                        <div class="col p-1 ">
                            <div class="card h-100">
                            <img src="../assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">Nombre</h6>
                                <p class="card-text">$$$$$$$ </p>
                                <h6 class="text-muted">stock</h6>                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->




</div>
 <?php
 require_once "../content/component/footer.php";
 require_once "./editarCategorias.php";
 require_once "./categoria.php";
 require_once "./aggProductos.php";

 ?>