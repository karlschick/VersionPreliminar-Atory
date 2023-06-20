<!DOCTYPE html>
<html>
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atory Solutions</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
  <body>
        <?php
        include '../menu/menuint.php';
        ?>


        <div class="main-panel">
          <div class="content-wrapper"> <!-- ESTO ES LO QUE TENEMOS QUE MODIFICAR -->
            <div class="card-body">
                    <h4 class="card-title">Ingreso de nuevos planes</h4>
                    <p class="card-description"> Ingrese nueva información del nuevo plan</p>
                    <form class="forms-sample">
                    <div class="form-group">
                        <label for="cp">Ingrese codigo del plan</label>
                        <input type="number" class="form-control"  name="cp" id="cp"  placeholder="Codigo de plan">
                      </div>
                      <div class="form-group">
                        <label for="tplan">Seleccione tipo de plan</label>
                        <select class="form-control" name="tplan" id="tplan">
                        <option value="rural">Rural</option>
                        <option value="urbano">Urbano</option>
                        <option value="empresarial">Empresarial</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="vel">Ingrese velocidad del plan</label>
                        <input type="text" class="form-control"  name="vel" id="vel"  placeholder="Velocidad del plan">
                      </div>

                      <!--valor de nombres y apellidos-->
                      <div class="form-group">
                        <label for="nplan">Ingrese nombre del plan</label>
                        <input type="text" class="form-control"  name="nplan" id="nplan"  placeholder="Nombre del Plan">
                      </div>


                      <!--valor de numero de telefono-->
                      <div class="form-group">
                        <label for="pplan">Ingrese Precio del Plan</label>
                        <input type="number" class="form-control"  name="pplan" id="pplan"  placeholder="Precio del plan">
                      </div>

                      <!--valor de email-->
                      <div class="form-group">
                        <label for="des">Describcion del plan</label>
                        <input type="text" class="form-control"  name="des" id="des"  placeholder="Describcion del plan">
                      </div>
                      <!--valor de estado del cliente-->
                      <div class="form-group">
                        <label for="estadop">Estado del plan</label>
                        <select class="radio" name="estadop" id="estadop">
                          <option value="Activo">Activo </option>
                          <option value="Archivado">Inactivo</option>
                        </select>
                      </div>

                      <div>
                        <br>
                        <button id="submit" type="submit" formmethod="post" formaction="../planes/inplanes.php" class="btn btn-primary">Guardar</button>
                        <button id="submit" type="submit" formmethod="post" formaction="../user.php" class="btn btn-primary"> Volver al inicio </button>
                        
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  
<div class="jvectormap-tip"></div>
</body>
</html>

