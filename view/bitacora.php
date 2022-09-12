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
                  <h2 class="font-weight-bold text-dark pt-2 m-0">Bítacora</h2>
                </div>
              <!-- </div>
            </div> -->
          </div>
          <hr>
          



          <div class="row my-3">
            <div class="card">
                <div class="card-body">
                <table class="table" id="example">
                      <thead class="my-3">
                        <tr>
                          <th>Fecha - Hora</th>
                          <th>Usuario</th>
                          <th>Acción</th>
                          <th>Módulo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="my-3">
                          <td>25/02/22 8:30pm</td>
                          <td>1</td>
                          <td>edicion de gasto</td>
                          <td>gastos</td>
                        </tr>
                        <tr class="my-3">
                          <td>25/02/22 8:30pm</td>
                          <td>1</td>
                          <td>edicion de gasto</td>
                          <td>gastos</td>
                        </tr>
                        <tr class="my-3">
                          <td>25/02/22 8:30pm</td>
                          <td>1</td>
                          <td>edicion de gasto</td>
                          <td>gastos</td>
                        </tr>
                        <tr class="my-3">
                          <td>25/02/22 8:30pm</td>
                          <td>1</td>
                          <td>edicion de gasto</td>
                          <td>gastos</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->       
 <?php
 require_once "../content/component/footer.php";
 require_once "./ventaLibre.php";
 require_once "./gastos.php";
 ?>
 <script>
            $(document).ready(function () {
    $('#example').DataTable();
});
        </script>

