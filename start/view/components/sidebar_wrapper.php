<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo">
    <a href="dashboard.php" class="simple-text logo-normal">
      Delizia
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li id="md" class="nav-item active">
        <a id="principal" class="nav-link" href="dashboard.php">
          <i class="material-icons">dashboard</i>
          <p>Panel</p>
        </a>
      </li>
      <li id="mt" class="nav-item ">
        <a id="tables" class="nav-link" href="tables.php">
          <i class="material-icons">table_chart</i>
          <p>Mesas</p>
        </a>
      </li>
      <li id="mc" class="nav-item ">
        <a id="consumo" class="nav-link" href="add.php">
          <i class="material-icons">create</i>
          <p>Consumo</p>
        </a>
      </li>
      <li id="mr" class="nav-item ">
        <a id="reserv" class="nav-link" href="reservation.php">
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
<script>

  cost mp = document.getElementById("principal")
  cost mt = document.getElementById("principal")
  cost mc = document.getElementById("principal")
  cost mr = document.getElementById("principal")

  document.getElementById("principal").addEventListener("click", =>{
    mp.className += "active"
    mt.className = "nav-item"
    mc.className = "nav-item"
    mr.className = "nav-item"
  })

  document.getElementById("tables").addEventListener("click", =>{
    mp.className = "nav-item"
    mt.className += "active"
    mc.className = "nav-item"
    mr.className = "nav-item"
  })

  document.getElementById("consumo").addEventListener("click", =>{
    mp.className = "nav-item"
    mt.className = "nav-item"
    mc.className += "active"
    mr.className = "nav-item"
  })

  document.getElementById("reserv").addEventListener("click", =>{
    mp.className = "nav-item"
    mt.className = "nav-item"
    mc.className = "nav-item"
    mr.className += "active"
  })

</script>
