
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row m-0 align-items-center">
                    <div class="col-1">
                        <a href="<?= _DIRECTORY_ ?>balance" class="btn btn-warning btn-icon-text"><i class="ti-arrow-left"></i></a>
                    </div>
                    <div class="col">
                        <h3 class="font-weight-bold text-dark text py-2">Nueva Venta</h3> 
                    </div>
            </div>
  <hr>
            <div class="row m-0" >
                <div class="col-12 p-0 col-sm-8">
                    <div class="row ">
                        <div class="col-md-5 grid-margin">
                            <select class="form-select form-select-lg  rounded-0" aria-label=".form-select-lg">
                            <option selected>Categorías</option>
                            <option value="1">viveres</option>
                            <option value="2">charcuteria</option>
                            <option value="3">carnes</option>
                            </select>
                        </div>
                        <div class="col-md-7 grid-margin">
                            <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                    <div class="overflow-auto" id="lista_prod" style="height: 600px;">
                        
                    </div>
                </div>
                <div class="col-12 p-0 col-sm-4">
                    <div class="card text-center "  >
                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col text-start p-2">
                                    <p class="fs-4">CANASTA</p>
                                </div>
                                <div class="col text-end">
                                    <a href="#" id="vaciarCanasta" class="fs-6">Vaciar canasta</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto" style="height: 550px;" id="canasta">
                        
                        </div>
                        <div class="card-footer bg-white" >
                            <div class="row">
                                <div class="col">
                                    <h6>Total</h6>
                                </div>
                                <div class="col">
                                    <h6 id="monto"></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid gap-2">
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Confirmar Productos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- modal -->
        <div class="modal fade bg-red" id="exampleModal" tabindex="-1" data-bs-backdrop="static"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content modal-fullscreen w-100 ">
                <div class="modal-header text-center">
                    <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalLabel">Confirmar Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="btn-group-lg text-center" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-success" for="btnradio1">Pagada</label>
                        <input type="radio" class="btn-check " name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="btnradio2">A crédito</label>
                    </div>
                    <div class="form-group mt-5">
                        <h5>Fecha de la venta *</h5>
                        <input type="date" class="form-control form-control-lg" id="fecha" placeholder="Fecha de la Venta">
                    </div>
                    <h5 class="mt-5">Método de pago*</h5>
                    <div class="btn-group-md text-center" role="group">
                        
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                        <label class="btn btn-outline-dark" for="option1"><i class="ti-wallet "></i><br>Efectivo</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-outline-dark" for="option2"><i class="ti-credit-card  "></i><br>Tarjeta</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" >
                        <label class="btn btn-outline-dark" for="option3"><i class="ti-desktop  "></i><br>Transferencia</label>

                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                        <label class="btn btn-outline-dark" for="option4"><i class="ti-money  "></i><br>Dolares</label>
                    </div>
                    <div class="mt-5 form-group ">
                        <h5>Agregar un cliente <small>(opcional)</small></h5>
                        <select class="form-select  mb-3 shadow-none" aria-label=".form-select example">
                            <option selected disabled>Selecciona un cliente</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-block w-100">
                        <button class="btn btn-warning w-100" type="button">Confirmar Venta</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal ends -->
</div>

 <script src="<?= _THEME_?>js/scripts/ventas.js"></script>