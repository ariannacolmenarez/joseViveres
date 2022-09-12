 <!-- modal gasto -->
 <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-fullscreen w-100">
                  <div class="modal-header text-center">
                    <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel2">Crear Gastos <i class="ti-shopping-cart"></i></h5>
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
                  <h5 class="mt-5">Valor de la venta *</h5>
                  <div class="input-group ">
                    <input type="text" class="form-control form-control-lg" aria-label="Dollar amount (with dot and two decimal places)">
                    <span class="input-group-text"><b>Valor total</b> </span>
                    <span class="input-group-text">=</span>
                    <span class="input-group-text text-success">0.00</span>
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
            </div>
              <!-- modal ends -->