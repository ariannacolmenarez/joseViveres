<?php
  require_once 'content/config/settings/SysConfig.php';
  $config = new SysConfig ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $data['page_tag']; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= _THEME_ ?>ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= _THEME_ ?>fonts/css/all.css">
  <link rel="stylesheet" href="<?= _THEME_ ?>base/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= _THEME_ ?>sweetalert2/sweetalert2.min.css">
  <!-- <link href="css/notificaciones.css" rel="stylesheet"> -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href= "<?= _THEME_ ?>css/style.css">
  <link rel="stylesheet" href= "<?= _THEME_ ?>css/jquery-ui.css">
  <link rel="stylesheet" href= "<?= _THEME_ ?>css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" type="text/css" href="<?= _THEME_ ?>DataTables/datatables.min.css"/>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= _THEME_ ?>images/MP.png" />
  <script src="<?= _THEME_ ?>js/jquery-3.6.1.min.js"></script>
  <script src="<?= _THEME_ ?>sweetalert2/sweetalert2.all.min.js"></script>
  <script src="<?= _THEME_ ?>js/scripts/notificaciones.js"></script>
 
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo " href="<?=_THEME_?>images/MP.png"><h3 class="naranja">Market MP</h3></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          
        <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="bell" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
            <i class="ti-bell mx-0"></i>
              <span id="cont"></span>            
            </a>
            <div class="notifications dropdown-menu dropdown-menu-right navbar-dropdown overflow-auto" id="box" style="display: none;" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              
            </div>
          </li>
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= empty($_SESSION['usuario']) ? 'USUARIO' : $_SESSION['usuario'] ?> <i class="ti-angle-down text-primary"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" id="logout">
                <i class="ti-power-off text-primary"></i>
                Cerrar sesión
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper bg-dark">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_ ?>">
              <img src="<?=_THEME_?>/images/MP.png"  class="img-fluid" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button"  id="usuarios">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Gestionar Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_ ?>">
              <i class="ti-receipt menu-icon"></i>
              <span class="menu-title">Gestionar Balance</span>
            </a>
          </li>
          <?php if(in_array("Consultar Inventario", $_SESSION['permisos'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_ ?>inventario">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Gestionar Inventario</span>
            </a>
          </li>
          <?php } ?>
          <?php if(in_array("Consultar Deudas", $_SESSION['permisos'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_ ?>deudas">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Gestionar Deudas</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" type="button" id="clientes">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Gestionar Clientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button"  id="proveedores">
              <i class="ti-truck menu-icon"></i>
              <span class="menu-title">Gestionar Proveedores</span>
            </a>
          </li> 
          <?php if(in_array("Consultar Estadisticas", $_SESSION['permisos'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-bar-chart-alt menu-icon"></i>
              <span class="menu-title">Generar Estadísticas</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-clipboard menu-icon"></i>
              <span class="menu-title">Generar Reportes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <?php if(in_array("Consultar Reportes Inventario", $_SESSION['permisos'])){ ?>
                  <li class="nav-item"> <a class="nav-link" href="#">Reportes de Inventario</a></li>
                <?php } ?>
                <?php if(in_array("Consultar Reportes Balance", $_SESSION['permisos'])){ ?>
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Balance</a></li>
                <?php } ?>
                <?php if(in_array("Consultar Reportes Deudas", $_SESSION['permisos'])){ ?>
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Deudas</a></li>
                <?php } ?>
                <?php if(in_array("Consultar Reportes Bitacora", $_SESSION['permisos'])){ ?>
                <li class="nav-item"> <a class="nav-link" href="<?= _DIRECTORY_ ?>bitacora">Reportes de Bítacora</a></li>
                <?php } ?>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_?>mantenimiento">
              <i class="ti-server menu-icon"></i>
              <span class="menu-title">Gestionar Mantenimiento</span>
            </a>
          </li>
          
          <?php if(in_array("Consultar Roles", $_SESSION['permisos'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= _DIRECTORY_ ?>seguridad">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Gestionar Seguridad</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Gestionar Ayuda</span>
            </a>
          </li>
        </ul>
      </nav>