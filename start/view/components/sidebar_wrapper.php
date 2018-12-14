<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo">
    <a href="dashboard" class="simple-text logo-normal">
      Delizia
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
    <?php
      if ($_SESSION['user'] == "mesero") {
        // code...
      } else {
        ?>
      <li id="md" class="nav-item active">
        <a id="principal" class="nav-link" href="dashboard">
          <i class="material-icons">dashboard</i>
          <p>Panel</p>
        </a>
      </li>
      
      <li id="mt" class="nav-item ">
        <a id="tables" class="nav-link" href="tables">
          <i class="material-icons">table_chart</i>
          <p>Mesas</p>
        </a>
      </li>
      <?php
      }
      ?>
      <li id="mc" class="nav-item ">
        <a id="consumo" class="nav-link" href="add">
          <i class="material-icons">create</i>
          <p>Consumo</p>
        </a>
      </li>
      <?php
      if ($_SESSION['user'] == "mesero") {
        // code...
      } else {
        ?>
      <li id="mr" class="nav-item ">
        <a id="reserv" class="nav-link" href="reservation">
          <i class="material-icons">content_paste</i>
          <p>Reservaciones</p>
        </a>
      </li>
      <?php
      }
      ?>
      <?php

      if ($_SESSION['user'] != "admin") {
        // code...
      } else {
        ?>
        <li class="nav-item active-pro ">
          <a class="nav-link" href="user_register">
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