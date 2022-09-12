<?php
     require_once "../content/component/header.php"
     ?>
     <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row py-0">
                <div class="col-lg-10 col-sm-8 col-9 grid-margin mb-0">
                    <h2 class="font-weight-bold text-dark pt-2 m-0">Estadísticas</h2>
                </div>
            </div>
            <hr>
            <div class="row w-75 m-auto">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active three" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Semanal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link three" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mensual</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link three" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Anual</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-6 col-md-offset-2" id="week-picker-wrapper">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn week-prev"><b><i class=" ti-angle-left"></i></b></button>
                                        </span>
                                        <input type="text" class="form-control week-picker text-center" placeholder="Select a Week">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn  week-next"><b><i class=" ti-angle-right"></i></b></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 w-50 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">Ventas Totales</h4>
                                                    <canvas id="barChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                
                                                    <h4 class="card-title text-center">Gastos Totales</h4>
                                                    <canvas id="areaChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Cobrar</h4>
                                            <canvas id="doughnutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Pagar</h4>
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card m-3">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Productos con más ventas</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Ventas</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr>
                                                    <td>Pollo</td>
                                                    <td>0.56</td>
                                                    <td>21 bs | 3$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Huevos</td>
                                                    <td>8</td>
                                                    <td>1.6 bs | 0.09$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Harina Pan</td>
                                                    <td>2</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Mayonesa</td>
                                                    <td>8</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="row justify-content-md-center">
                                <div class="form-group col-md-6 col-md-offset-2" id="week-picker-wrapper">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn month-prev"><b><i class=" ti-angle-left"></i></b></button>
                                        </span>
                                            <input type="text" class="form-control text-center" name="datepicker" id="datepicker" />                                     <span class="input-group-btn">
                                            <button type="button" class="btn  month-next"><b><i class=" ti-angle-right"></i></b></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 w-50 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">Ventas Totales</h4>
                                                    <canvas id="barChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                
                                                    <h4 class="card-title text-center">Gastos Totales</h4>
                                                    <canvas id="areaChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Cobrar</h4>
                                            <canvas id="doughnutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Pagar</h4>
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card m-3">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Productos con más ventas</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Ventas</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr>
                                                    <td>Pollo</td>
                                                    <td>0.56</td>
                                                    <td>21 bs | 3$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Huevos</td>
                                                    <td>8</td>
                                                    <td>1.6 bs | 0.09$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Harina Pan</td>
                                                    <td>2</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Mayonesa</td>
                                                    <td>8</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <div class="row justify-content-md-center">
                                <div class="form-group col-md-6 col-md-offset-2" id="week-picker-wrapper">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn year-prev"><b><i class=" ti-angle-left"></i></b></button>
                                        </span>
                                        <input type="text" class="form-control text-center" name="year_datepicker" id="year_datepicker" />                                     <span class="input-group-btn">
                                            <button type="button" class="btn  year-next"><b><i class=" ti-angle-right"></i></b></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 w-50 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">Ventas Totales</h4>
                                                    <canvas id="barChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card">
                                                <div class="card-body">
                                                
                                                    <h4 class="card-title text-center">Gastos Totales</h4>
                                                    <canvas id="areaChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Cobrar</h4>
                                            <canvas id="doughnutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 p-2">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Deudas por Pagar</h4>
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card m-3">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Productos con más ventas</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Ventas</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr>
                                                    <td>Pollo</td>
                                                    <td>0.56</td>
                                                    <td>21 bs | 3$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Huevos</td>
                                                    <td>8</td>
                                                    <td>1.6 bs | 0.09$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Harina Pan</td>
                                                    <td>2</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Mayonesa</td>
                                                    <td>8</td>
                                                    <td>6.6 bs | 1.1$</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
        
 <?php
 require_once "../content/component/footer.php";
 ?>

