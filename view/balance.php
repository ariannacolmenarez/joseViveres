
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row py-0">
            <!-- <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center"> -->
                <div class="col-lg-8 col-sm-4 col-6 grid-margin mb-0">
                  <h2 class="font-weight-bold text-dark pt-2 m-0">Balance</h2>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
                  <div class="dropdown">
                    <button class="text-white btn btn-success mt-2 btn-icon-text dropdown-toggle" title="Ventas" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="ti-plus btn-icon-prepend"></i><b class="text">Realizar Venta</b>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="ti-shopping-cart text-success btn-icon-prepend"></i>
                          Venta de productos<p>
                            <span class="text-muted">
                              <small>Registra una venta seleccionando algun producto de tu inventario</small>
                            </span>
                          </p>
                        </a>
                      </li>
                      <li>
                        <button class="dropdown-item" type="button" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                          <i class="ti-money text-success btn-icon-prepend"></i>
                          Venta libre<p>
                            <span class="text-muted">
                              <small>Registra una sin seleccionar ningún producto de tu inventario</small>
                            </span>
                          </p>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 grid-margin mb-0">
                  <button type="button" class="text-white btn btn-danger mt-2 btn-icon-text" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" title="Compras">
                    <i class="ti-minus btn-icon-prepend"></i><b class="text">Realizar Gasto</b>
                  </button>
              </div>
              <!-- </div>
            </div> -->
          </div>
          <hr>
          <div class="row my-3">
            <div class="col-md-3 grid-margin">
              <select class="form-select form-select-lg  rounded-0" aria-label=".form-select-lg">
                <option selected>Diariamente</option>
                <option value="1">Semanalmente</option>
                <option value="2">Mensualmente</option>
                <option value="3">Anualmente</option>
              </select>
            </div>
            <div class="col-md-3 grid-margin">
              <input class="form-control " type="date" placeholder=".form-control" aria-label=".form-control ">
            </div>
            <div class="col-md-3 grid-margin">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
            <div class="col-md-3 grid-margin text-end">
              <button type="button" class="text-white btn btn-warning btn-icon-text ">
                <i class="ti-download btn-icon-prepend"></i><b>Descargar reporte</b>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-primary text-xl-left">Utilidad</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                    <i class="ti-stats-up icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-success text-xl-left">Ventas totales</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                    <i class="ti-money icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-danger text-xl-left">Gastos totales</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                    <i class="ti-money icon-md text-danger mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                </div>
              </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="card">
              <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Ingresos</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Egresos</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pagar-tab" data-bs-toggle="tab" data-bs-target="#pagar-tab-pane" type="button" role="tab" aria-controls="pagar-tab-pane" aria-selected="false">Por pagar</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cobrar-tab" data-bs-toggle="tab" data-bs-target="#cobrar-tab-pane" type="button" role="tab" aria-controls="cobrar-tab-pane" aria-selected="false">Por cobrar</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active p-2 overflow-auto" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <table class="table" id="example">
                      <thead>
                        <tr>
                          <th>Fecha - Hora</th>
                          <th>Concepto</th>
                          <th>Medio de pago</th>
                          <th>Valor</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade p-2" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <table class="table"id="example2">
                    <thead>
                        <tr>
                          <th>Fecha - Hora</th>
                          <th>Concepto</th>
                          <th>Medio de pago</th>
                          <th>Valor</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade p-2" id="pagar-tab-pane" role="tabpanel" aria-labelledby="pagar-tab" tabindex="0">
                    <table class="table" id="example3">
                    <thead>
                        <tr>
                          <th>Fecha - Hora</th>
                          <th>Concepto</th>
                          <th>Medio de pago</th>
                          <th>Valor</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade p-2" id="cobrar-tab-pane" role="tabpanel" aria-labelledby="cobrar-tab" tabindex="0">
                    <table class="table" id="example4">
                    <thead>
                        <tr>
                          <th>Fecha - Hora</th>
                          <th>Concepto</th>
                          <th>Medio de pago</th>
                          <th>Valor</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>25/02/22 8:30pm</td>
                          <td>1 diablito</td>
                          <td>tarjeta</td>
                          <td>25,00 bs</td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-outline-danger btn-rounded btn-icon">
                                  <i class="ti-trash"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon">
                                  <i class="ti-receipt"></i>
                                </button>
                              </div>
                              <div class="col">
                                <button class="btn btn-outline-primary btn-rounded btn-icon">
                                  <i class="ti-marker-alt"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->       

 <script>
            $(document).ready(function () {
    $('#example').DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
    $('#example4').DataTable();
});
        </script>

