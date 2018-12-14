<?php
session_start();
if (isset($_SESSION['user'])) {
  require '../control/actions.php';
  require_once '../model/methods.php';
  if($_SESSION['user'] == "mesero"){
    print '<script> window.location="notAccess" </script>';
  } else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>DELIZIA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/store.png">
  <link rel="icon" type="image/png" href="assets/img/store.png">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <!-- sidebar -->
    <?php require 'components/sidebar_wrapper.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require 'components/navbar.php'; ?>
      <div class="content">
        <div class="container-fluid">
          <div id="tablesDis" class="row">
            <?php showTablesDis() ?>
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
</body>

</html>
<?php
  }
}else {
  print '<script> window.location="error_login" </script>';
}
 ?>
