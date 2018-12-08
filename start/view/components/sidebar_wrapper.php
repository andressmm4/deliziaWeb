<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo">
    <a href="dashboard.php" class="simple-text logo-normal">
      Delizia
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
        <a id="principal" class="nav-link" href="dashboard.php">
          <i class="material-icons">dashboard</i>
          <p>Panel</p>
        </a>
      </li>
      <li class="nav-item ">
        <a id="notification" class="nav-link" href="tables.php">
          <i class="material-icons">table_chart</i>
          <p>Mesas</p>
        </a>
      </li>
      <li class="nav-item ">
        <a id="notification" class="nav-link" href="add.php">
          <i class="material-icons">create</i>
          <p>Consumo</p>
        </a>
      </li>
      <li class="nav-item ">
        <a id="tables" class="nav-link" href="reservation.php">
          <i class="material-icons">content_paste</i>
          <p>Reservaciones</p>
        </a>
      </li>
      <?php
      if ($_SESSION['user'] != "admin") {
        // code...
      } else {
      ?>
        <li class="nav-item active-pro ">
          <a class="nav-link" href="user_register.php">
            <i class="material-icons">people</i>
            <p>Nuevo Usuario</p>
          </a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</div>
<script src="" charset="utf-8">
  const btnPrincipal = document.getElementById('principal')
  document.getElementById('')
</script>
