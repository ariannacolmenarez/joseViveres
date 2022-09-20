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
  <link rel="stylesheet" href="<?= _THEME_ ?>/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= _THEME_ ?>/fonts/css/all.css">
  <link rel="stylesheet" href="<?= _THEME_ ?>/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href= "<?= _THEME_ ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= _THEME_ ?>/DataTables/datatables.min.css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= _THEME_ ?>/images/MP.png" />
  <script src="<?= _THEME_ ?>/js/jquery-3.6.1.min.js"></script>
 
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
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="<?=_THEME_?>images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-user text-primary"></i>
                Perfil
              </a>
              <a class="dropdown-item">
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
            <a class="nav-link" href="#">
              <img src="<?=_THEME_?>/images/MP.png"  class="img-fluid" />
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-receipt menu-icon"></i>
              <span class="menu-title">Balance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Inventario</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Deudas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Clientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button"  id="proveedores">
              <i class="ti-truck menu-icon"></i>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-bar-chart-alt menu-icon"></i>
              <span class="menu-title">Estadísticas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-clipboard menu-icon"></i>
              <span class="menu-title">Reportes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Inventario</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Balance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Deudas</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Reportes de Bítacora</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-server menu-icon"></i>
              <span class="menu-title">Mantenimiento</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Seguridad</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Ayuda</span>
            </a>
          </li>
        </ul>
      </nav>