<?php
     require_once "../content/component/header.php"
     ?>
     <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row py-0">
                <div class="col-lg-10 col-sm-8 col-9 grid-margin mb-0">
                    <h2 class="font-weight-bold text-dark pt-2 m-0">Reportes de Balance</h2>
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
                            <div class="card mt-1 w-75 m-auto">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
                                                </div>
                                            </div>
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
                            <div class="card mt-1 w-75 m-auto">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
                                                </div>
                                            </div>
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
                            <div class="card mt-1 w-75 m-auto">
                                <div class="card-body rounded">
                                    <ul class="nav nav-pills mb-3 nav-justified m-auto border border-secondary rounded" id="pills-tab" role="tablist">
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link active one" id="venta-label" data-bs-toggle="pill" data-bs-target="#venta" type="button" role="tab" aria-controls="venta" aria-selected="true">Venta</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link two " id="gasto-label" data-bs-toggle="pill" data-bs-target="#gasto" type="button" role="tab" aria-controls="gasto" aria-selected="false">Gasto</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="venta" role="tabpanel" aria-labelledby="venta-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="gasto" role="tabpanel" aria-labelledby="gasto-label" tabindex="0">
                                            <div class="card w-50 m-auto">
                                                <div class="card-body">
                                                <i class="ti-clipboard icon-md text-primary mb-0 mb-md-3 mb-xl-0"></i><h4 class="card-title text-md-center text-primary">Generar Reporte</h4>
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
    </div>
        <!-- content-wrapper ends -->   
        
 <?php
 require_once "../content/component/footer.php";
 ?>

