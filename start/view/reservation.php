<?php
session_start();
if (isset($_SESSION['user'])) {
  require '../model/methods.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
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
    //Realizar la consuta cada tiempo para tener los datos frescos
    //FIXME: Consulta de reservaciones vigentes
    setInterval(() => {
      var dataRev = $.ajax({
        url: "../model/printReservations.php",
        dataType: "text",
        async: false
      }).responseText

      var tableRev = document.getElementById('reservations')
      tableRev.innerHTML = dataRev
    }, 1000);

    //FIXME: Consulta de reservaciones facturadas
    setInterval(() => {
      var dataFact = $.ajax({
        url: "../model/printFact.php",
        dataType: "text",
        async: false
      }).responseText

      var tableFact = document.getElementById('facts')
      tableFact.innerHTML = dataFact
    }, 1000);

  </script>
</body>
</html>
<?php
} else {
  print '<script> window.location="error_login.php" </script>';
}
 ?>
