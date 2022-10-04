    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row py-0">
                <div class="col-lg-10 col-sm-8 col-9 grid-margin mb-0">
                    <h2 class="font-weight-bold text-dark pt-2 m-0"><a href="<?= _DIRECTORY_ ?>seguridad" style="text-decoration:none;"><b><i class="text-dark ti-angle-left"></i></b></a> Permisos</h2>
                </div>
            </div>
            <hr>
            <div class="row w-10 overflow-auto m-auto">
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="<?= _DIRECTORY_ ?>seguridad/guardarPermisos?c=<?=$_GET['c']?>">
                        <table class="table table-bordered  w-100"  width="100%"  cellspacing="0" >
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Modulo</th>
                                    <th>Consultar</th>
                                    <th>Modificar</th>
                                    <th>Registrar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Gestionar Balance</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="1" <?= in_array("Consultar Balance", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="3" <?= in_array("Crear Balance", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="4" <?= in_array("Eliminar Balance", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Gestionar Inventario</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="5" <?= in_array("Consultar Inventario", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="6" <?= in_array("Modificar Inventario", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="7" <?= in_array("Crear Inventario", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="8" <?= in_array("Eliminar Inventario", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Gestionar Deudas</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="9" <?= in_array("Consultar Deudas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="10" <?= in_array("Modificar Deudas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="11" <?= in_array("Crear Deudas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="12" <?= in_array("Eliminar Deudas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                                <tr class="text-center">
                                    <td>4</td>
                                    <td>Gestionar Proveedores</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="13" <?= in_array("Consultar Proveedores", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="14" <?= in_array("Modificar Proveedores", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="15" <?= in_array("Crear Proveedores", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="16" <?= in_array("Eliminar Proveedores", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>5</td>
                                    <td>Gestionar Clientes</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="17" <?= in_array("Consultar Clientes", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="18" <?= in_array("Modificar Clientes", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="19" <?= in_array("Crear Clientes", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="20" <?= in_array("Eliminar Clientes", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>6</td>
                                    <td>Gestionar Usuarios</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="21" <?= in_array("Consultar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="22" <?= in_array("Modificar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                    <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="23" <?= in_array("Crear Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                    <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="24" <?= in_array("Eliminar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>7</td>
                                    <td>Generar Estadísticas</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="25" <?= in_array("Consultar Estadisticas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>8</td>
                                    <td>Generar Reportes Balance</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="26" <?= in_array("Consultar Reportes Balance", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>9</td>
                                    <td>Generar Reportes Inventario</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="27" <?= in_array("Consultar Reportes Inventario", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>10</td>
                                    <td>Generar Reportes Inventario</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="28" <?= in_array("Consultar Reportes Deudas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>11</td>
                                    <td>Gestionar Mantenimiento</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="29" <?= in_array("Crear Respaldo Base Datos", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="30" <?= in_array("Modificar Base Datos", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>12</td>
                                    <td>Gestionar Seguridad</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="31" <?= in_array("Consultar Roles", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="32" <?= in_array("Modificar Roles", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="33" <?= in_array("Crear Roles", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="34" <?= in_array("Eliminar Roles", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>13</td>
                                    <td>Gestionar Permisos</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="35" <?= in_array("Crear Permisos", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>13</td>
                                    <td>Generar Bitacora</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="36" <?= in_array("Consultar Reportes Bitacora", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-block w-100 text-center mt-5">
                            <button type="submit" class="btn btn-warning w-50" type="button">Guardar Cambios</button>
                        </div>
                        <div class="d-grid gap-2 d-md-block w-100 text-center mt-2">
                            <button type="reset" class="btn btn-secondary w-50" type="button">Limpiar Cambios</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


