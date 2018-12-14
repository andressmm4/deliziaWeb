<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DELIZIA ADMIN
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

<body class="offline-doc dark-edition">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <!-- <a class="navar-brand btn btn-danger" href="#SALIR">SALIR</a> -->
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>

    </div>
  </nav>
  <!-- End Navbar -->

  <div class="page-header clear-filter">
    <div class="page-header-image" style="background-image: url('../assets/img/sidebar-2.jpg');"></div>
    <div class="content-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1 class="title">
            ERROR
          </h1>
          <h3 class="description">No posees permisos para acceder...!</h3>
          <br/>
          <!-- <a href="dashboard.php" class="btn btn-primary btn-round btn-lg">Entrar</a> -->
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
      <div class="copyright float-right">
        <i class="material-icons">copyright</i>2018 by
        <a href="#andres" target="">A.S.A</a> DEVELOPER.
      </div>
    </div>
  </footer>
  <script>
    const x = new Date().getFullYear();
    let date = document.getElementById('date');
    date.innerHTML = '&copy; ' + x + date.innerHTML;
  </script>
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
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <script src="../assets/demo/demo.js"></script>
  <script type="text/javascript">
    function redirection() {
      window.location = "add"
    }
    setTimeout("redirection()", 3000)
  </script>
</body>

</html>
