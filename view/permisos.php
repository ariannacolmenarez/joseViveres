<?php
     require_once "../content/component/header.php"
     ?>
     <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row py-0">
                <div class="col-lg-10 col-sm-8 col-9 grid-margin mb-0">
                    <h2 class="font-weight-bold text-dark pt-2 m-0"><a href="seguridad.php" style="text-decoration:none;"><b><i class="text-dark ti-angle-left"></i></b></a> Permisos</h2>
                </div>
            </div>
            <hr>
            <div class="row w-75 m-auto">
                <div class="card">
                    <div class="card-body">
                    <form>
                        <table class="table text-center" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Modulo</th>
                                    <th>Ver</th>
                                    <th>Crear</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Usuarios</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                                <tr class="text-center">
                                    <td>Encargados</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Dependencias</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" >
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-block w-100 text-center mt-5">
                            <button class="btn btn-warning w-50" type="button">Guardar Cambios</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- content-wrapper ends -->    
        
        
 <?php
 require_once "../content/component/footer.php";
 ?>

