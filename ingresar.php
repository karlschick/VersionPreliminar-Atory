<?php
//seguridad de sesiones paginacion (prueba 1)
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if ($varsesion == null || $varsesion='') {
    header ("location:index.html");
    die();
    exit;
}

/* 
include "login/claseSeguridad.php";

$seguridad = new Seguridad();
if ($seguridad->getUsuario()==null) {
    header ('location:index.html');
}
*/
?>

<!-- CODIGO HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ATORY - Admin</title>
    <!-- Estilos de los plugins -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- Fin de los estilos de los plugins -->
    <!-- Estilos del archivo actual -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Fin de los estilos del archivo actual -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body>
    <div class="container-scroller">
        <!-- Todo el slider -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <!-- Logo de Atory -->
                <a class="sidebar-brand brand-logo" href="index.html">
                    <img src="assets/images/atori.png" alt="logo">
                </a>
                <!-- Volver a inicio -->
                <a class="sidebar-brand brand-logo-mini" href="index.html">
                    <img src="assets/images/logo-mini.png" alt="logo">
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle" src="assets/images/faces-clipart/pic-8.png" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">ADMINISTRATIVO</h5>
                                <span>Rol administrativo</span>
                            </div>
                        </div>
                        <!-- Ajustes de perfil -->
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">PANEL DE CONTROL</span>
                </li>
                <li class="nav-item menu-items active">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Gestión clientes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link active" href="principal.php">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tablas.php">Ver tablas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ingresar.php">Ingresar nuevo cliente</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="usuarios/usuarios.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Gestión Usuarios</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Gestión Planes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/rurales.php">Rurales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/urbanos.php">Urbanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/empresariales.php">Empresas</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="facturacion/facturacion.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Gestión Facturación</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="inventario/inventario.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">Gestión Inventario</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pqr/pqr.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                        </span>
                        <span class="menu-title">PQR</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Página parcial -->
        <div class="container-fluid page-body-wrapper">
            <!-- Menú navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="assets/images/logo-mini.png" alt="logo">
                    </a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link collapsed" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces-clipart/pic-8.png" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">ADMINISTRATIVO</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">PERFIL</h6>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" href="login/login.php">
                                    <div class="dropdown-item preview-item">
                                    <a href="cerrarSesion.php"><div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-logout text-danger"></i>
                                            </div>
                                        </div></a>
                                        <a href="cerrarSesion.php"><div class="preview-item-content">
                                            <p class="preview-subject mb-1" >Cerrar sesión</p>
                                        </div></a>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper"> <!-- ESTO ES LO QUE TENEMOS QUE MODIFICAR -->
            <div class="card-body">
                    <h4 class="card-title">GESTION DE CLIENTES</h4>
                    <p class="card-description"> Ingrese los datos del cliente</p>
                    <form class="forms-sample">
                      <!--tipo de documento-->
                      <div class="form-group">
                        <label for="td">Seleccione tipo de documento</label>
                        <select class="form-control" name="td" id="td">
                        <option value="C.C">C.C</option>
                        <option value="C.E">C.E</option>
                        <option value="R.C">R.C</option>
                        <option value="T.I">T.I</option>
                        </select>
                      </div>
                      <!--valor de documento-->
                      <div class="form-group">
                        <label for="id">Ingrese documento</label>
                        <input type="text" class="form-control"  name="id" id="id"  placeholder="Numero de documento">
                      </div>

                      <!--valor de nombres y apellidos-->
                      <div class="form-group">
                        <label for="nombre">Ingrese nombres y apellidos</label>
                        <input type="text" class="form-control"  name="nombre" id="nombre"  placeholder="Ingrese nombre">
                      </div>


                      <!--valor de numero de telefono-->
                      <div class="form-group">
                        <label for="tel">Ingrese numero de telefono</label>
                        <input type="text" class="form-control"  name="tel" id="tel"  placeholder="Numero de telefono">
                      </div>

                      <!--valor de email-->
                      <div class="form-group">
                        <label for="email">Ingrese correo electronico</label>
                        <input type="email" class="form-control"  name="email" id="email"  placeholder="Correo electronico">
                      </div>

                      <!--valor de direccion-->
                      <div class="form-group">
                        <label for="dir">Ingrese dirección</label>
                        <input type="text" class="form-control"  name="dir" id="dir"  placeholder="Dirección">
                      </div>

                      <!--valor de estado del cliente-->
                      <div class="form-group">
                        <label for="estado">Seleccione el estado del cliente</label>
                        <select class="form-control" name="estado" id="estado">
                          <option value="Activo">Activo </option>
                          <option value="Archivado">Inactivo</option>
                        </select>
                      </div>

                      <!--valor de fecha creacion-->
                      <div class="form-group">
                        <label for="creacion">Ingrese fecha de creacion</label>
                        <input type="date" class="form-control"  name="creacion" id="creacion"  placeholder="">
                      </div>

                      <!--valor de ultima actualizacion-->
                      <div class="form-group">
                        <label for="act">Ingrese fecha ultima actualizacion</label>
                        <input type="date" class="form-control"  name="act" id="act"  placeholder="">
                      </div>

                      <div>
                        <br>
                        <button id="submit" type="submit" formmethod="post" formaction="insertar.php" class="btn btn-primary">Guardar</button>
                        <button id="submit" type="submit" formmethod="post" formaction="tablas.php" class="btn btn-primary"> Volver al inicio </button>
                        
                      </div>
                    </form>
            
            <div class="row">
              <div>
                <div>
                  
                </div>
              </div>
              
            </div>
            
            
            
            
          </div>
          <!-- ESTO ES LO QUE PODEMOS MODIFICAR -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Atory Solution 2023</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href=" " target="_blank"></a> </span>
          </div>
        </footer>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    
    
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  
<div class="jvectormap-tip"></div>
</body>
</html>

