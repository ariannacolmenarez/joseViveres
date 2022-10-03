<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row py-0">
            <div class="col-lg-8 col-sm-4 col-6 grid-margin mb-0">
              <h2 class="font-weight-bold text-dark pt-2 m-0">Deudas</h2>
            </div> 
            <?php if(in_array("Crear Deudas", $_SESSION['permisos'])){ ?>
            <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
              <a href="<?= _DIRECTORY_ ?>ventas" class="text-white btn btn-success mt-2 btn-icon-text" title="Ventas" type="button" id="ventas">
                <i class="ti-plus btn-icon-prepend"></i><b class="text">Realizar Venta</b>
              </a>
            </div>
            <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
              <button type="button" class="text-white btn btn-danger mt-2 btn-icon-text" id="gastos" title="Compras">
                <i class="ti-minus btn-icon-prepend"></i><b class="text">Realizar Gasto</b>
              </button>
            </div>
            <?php } ?>
          </div>
          <hr>
          <div class="row my-3">
            <div class="col-md-7 grid-margin">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
            <?php if(in_array("Consultar Reportes Deudas", $_SESSION['permisos'])){ ?>
            <div class="col-md-5 grid-margin text-end">
              <button type="button" class="text-white btn btn-warning btn-icon-text ">
                <i class="ti-download btn-icon-prepend"></i><b>Descargar reporte</b>
              </button>
            </div>
            <?php } ?>
          </div>
          <div class="row w-75 m-auto">
            <div class="card">
              <div class="card-body">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                      <p class="card-title text-md-center text-danger text-xl-left">Deudas por Pagar</p>
                      <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" id="totalP"></h3>
                          <i class="ti-money icon-md text-danger mb-0 mb-md-3 mb-xl-0"></i>
                      </div> 
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> <p class="card-title text-md-center text-success text-xl-left">Deudas por Cobrar</p>
                      <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-center" id="totalC"></h3>
                        <i class="ti-money icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                      </div>
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="list-group list-group-flush mt-2" id="lista_deudasP"> 
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="list-group list-group-flush mt-2" id="lista_deudasC">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- content-wrapper ends -->     
        
        <?php
require_once("view/gastos.php");
require_once("view/deudasCobrar.php");
require_once("view/deudasPagar.php");
?>
  <script src="<?= _THEME_?>js/scripts/deudas.js"></script>


