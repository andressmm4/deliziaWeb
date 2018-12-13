<?php
session_start();
// include 'serv.php';
if(isset($_SESSION['user'])){
  require '../model/methods.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/store.png">
  <link rel="icon" type="image/png" href="assets/img/store.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DELIZIA
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <!-- sidebar -->
    <?php require 'components/sidebar_wrapper.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require 'components/navbar.php'; ?>
      <div class="content">

        <!-- FIXME: Contenedor del Dashboard -->
        <div id="content-dashboard" class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">beenhere</i>
                  </div>
                  <p class="card-category"></p>

                  <h4>Disponibles</h4>
                  <h3 class="card-title"><?php disTablesData() ?>/20
                   
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">check_box</i>Cantida De Mesas Disponibles
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category"></p>
                  <h4>Total Consumos</h4>
                  <h3 class="card-title" id="consumo">Q.<?php totalCons() ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Total de consumos del mes
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">supervisor_account</i>
                  </div>
                  <p class="card-category"></p>
                  <h4>Total Personas<h4>
                  <h3 class="card-title"><?php totalPers() ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">supervisor_account</i> Personas que fueron atendidas al mes
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Reservaciones del día</h4>
                  <p class="card-category">En proceso</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          ID
                        </th>
                        <th>
                          NOMBRE
                        </th>
                        <th>
                          MESA
                        </th>
                        <th>
                          N. PERSONAS
                        </th>
                        <th>
                          CONSUMO
                        </th>
                      </thead>
                      <tbody>
                        <?php $valWithoutFact = 0; printReservations($valWithoutFact); ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- FIXME: Contenedor de Reservaciones -->
        <div id="content-reservation" class="container-fluid" hidden>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Reservaciones del día</h4>
                  <p class="card-category">En proceso</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          NOMBRE
                        </th>
                        <th>
                          MESA
                        </th>
                        <th>
                          N. PERSONAS
                        </th>
                        <th>
                          CONSUMO
                        </th>
                      </thead>
                      <tbody id="reservations">
                        <!-- FIXME: Vista de reservaciones en tiempo real -->                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Facturado / Eliminado</h4>
                  <p class="card-category">Mucho mas espacio</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                      <th>
                          ID
                        </th>
                        <th>
                          NOMBRE
                        </th>
                        <th>
                          MESA
                        </th>
                        <th>
                          N. PERSONAS
                        </th>
                        <th>
                          CONSUMO
                        </th>
                      </thead>
                      <tbody id="facts">
                        <!-- FIXME: Vista de reservaciones facturadas en tiempo real -->                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php require 'components/footer.php'; ?>

    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  <script>
    var mp = document.getElementById('principal');
    var mt = document.getElementById("principal");
    var mc = document.getElementById("principal");
    var mr = document.getElementById("principal");

    document.getElementById("principal").addEventListener("click", function(){
      mp.className += "active"
      mt.className = "nav-item"
      mc.className = "nav-item"
      mr.className = "nav-item"
    })

    document.getElementById("tables").addEventListener("click", function(){
      mp.className = "nav-item"
      mt.className += "active"
      mc.className = "nav-item"
      mr.className = "nav-item"
    })

    document.getElementById("consumo").addEventListener("click", function(){
      mp.className = "nav-item"
      mt.className = "nav-item"
      mc.className += "active"
      mr.className = "nav-item"
    })

    document.getElementById("reserv").addEventListener("click", function(){
      mp.className = "nav-item"
      mt.className = "nav-item"
      mc.className = "nav-item"
      mr.className += "active"
    })

</script>

<script>
    //Realizar la consuta cada tiempo para tener los datos frescos
    //FIXME: Consulta de reservaciones vigentes
    setInterval(() function() {
      var dataRev = $.ajax({
        url: "../model/printReservations.php",
        dataType: "text",
        async: false
      }).responseText;

      var tableRev = document.getElementById('reservations')
      tableRev.innerHTML = dataRev
    }, 1000);

    //FIXME: Consulta de reservaciones facturadas
    setInterval(() function() {
      var dataFact = $.ajax({
        url: "../model/printFact.php",
        dataType: "text",
        async: false
      }).responseText

      var tableFact = document.getElementById('facts')
      tableFact.innerHTML = dataFact
    }, 1000)
</script>
<script>

    $(document).ready( function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts()

    });
  </script>
 

</body>
</html>
<?php
}
else {
  print '<script> window.location="error_login.php" </script>';
}
?>
