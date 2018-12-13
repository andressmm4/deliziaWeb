<?php

// FIXME: Mesas disponibles
function showTablesDis()
{
  require_once 'connection.php';

  $_SELECT_SQL = "SELECT * FROM tables WHERE tables.available = '0'";
  $result = mysqli_query($con, $_SELECT_SQL);

  while ($consult = mysqli_fetch_array($result)) {
    ?>
    <!-- FIXME: Card de las masas disponibles -->
    <div class="col-xl-2 col-md-3 col-sm-6 hidden">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <h2><?php print $consult['id_table']; ?></h2>
          </div>
          <p class="card-category">Mesa para:</p>
          <h3 class="card-title"><?php print $consult['capacity']; ?></h3>
        </div>
        <div class="card-footer">
          <div class="">
            <input hidden type="text" name="tablesSelect" value="<?php print $consult['id_table']; ?>">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php print $consult['id_table']; ?>">
              Asignar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- FIXME: modal de la mesa, para realizar reservación -->
    <div class="modal fade" id="<?php print $consult['id_table']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">
              <?php print $consult['id_table']; ?>
              
            </h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <br>
            <form action="">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input style="color: black;"  type="text" class="form-control" name="name" placeholder="Nombre">
              </div>
              <br>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">people</i>
                  </span>
                </div>
                <input style="color: black;" type="number" class="form-control" name="numP" placeholder="Num Perosnas">
              </div>
              <input hidden type="text" name="tablesSelect" value="<?php print $consult['id_table']; ?>">
              <input type="submit" class="btn btn-primary" id="asigned" name="asigned" value="Guardar">
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <?php
  }
}


// FIXME: Reservaciones activas
function showTablesOcup()
{
  require 'connection.php';

  $_SELECT_SQL = "SELECT reservations.id_rev, reservations.name, reservations.num_person, reservations.consumo_asigned, reservations.table_asigned, reservations.fact,
  consumo.id_cons, consumo.total_cost,
  tables.id_table, tables.available
  FROM reservations, tables, consumo
  WHERE reservations.id_rev = consumo.id_cons AND reservations.fact = '0'
  AND reservations.table_asigned = tables.id_table AND tables.available = '1' ORDER BY tables.id_table ASC";

  $result = mysqli_query($con, $_SELECT_SQL);

  while ($consult = mysqli_fetch_array($result)) {
    ?>
    <div class="col-xl-2 col-md-3 col-sm-6 hidden">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <h2><?php print $consult['id_table']; ?></h2>
          </div>
          <p class="card-category">Mesa ocupada por:</p>
          <h3 class="card-title"><?php print $consult['num_person']; ?></h3>
        </div>
        <div class="card-footer">
          <div class="">
            <a href="#" class="btn btn-success">Asignar</a>
            <input type="submit" class="btn btn-primary" id="fact" name="fact" value="Facturar">
          </div>
        </div>
      </div>
    </div>
    <?php
  }
}

// FIXME: Cantidad de mesas ocupadas
function disTablesData()
{
  require 'connection.php';
  
  try {
    $_COUNT_SQL = "SELECT count(*) AS totalTables FROM tables WHERE tables.available = '0'";
    $resultCount = mysqli_query($con, $_COUNT_SQL);

    while ($consult = mysqli_fetch_array($resultCount)) {
      $totalTables = $consult['totalTables'];
      print $totalTables;
    }
  } catch (\Exception $e) {}
}

function totalCons()
{
  require 'connection.php';
  
  try {
    $_COUNT_SQL = "SELECT SUM(total_cost) AS result FROM consumo";
    $resultCount = mysqli_query($con, $_COUNT_SQL);

    while ($consult = mysqli_fetch_array($resultCount)) {
      $totalCons = $consult['result'];
      print $totalCons;
    }
  } catch (\Exception $e) {}
}
function totalPers()
{
  require 'connection.php';
  
  try {
    $_COUNT_SQL = "SELECT SUM(num_person) AS suma FROM reservations";
    $resultCount = mysqli_query($con, $_COUNT_SQL);

    while ($consult = mysqli_fetch_array($resultCount)) {
      $totalPers = $consult['suma'];
      print $totalPers;
    }
  } catch (\Exception $e) {}
}
// FIXME: lista reservaciones realizadas

function printReservations($valFact)
{
  require 'connection.php';


  $_SELECTreservations_SQL = "SELECT reservations.id_rev, reservations.name, reservations.num_person, reservations.consumo_asigned, reservations.table_asigned, reservations.fact, consumo.total_cost
  FROM reservations, consumo WHERE reservations.consumo_asigned = consumo.id_cons AND reservations.fact = '$valFact'
  ORDER BY reservations.id_rev ASC";

  $consultShow = mysqli_query($con, $_SELECTreservations_SQL);
  

  while ($resultRev = mysqli_fetch_array($consultShow)) {
  ?>
    <tr>
      <td>
        <?php print $resultRev['id_rev'];?>
      </td>
      <td>
        <?php print $resultRev['name']; ?>
      </td>
      <td>
        <?php print $resultRev['table_asigned'] ?>
      </td>
      <td>
        <?php print $resultRev['num_person'] ?>        
      </td>
      <td class="text-primary">
        Q.<?php print $resultRev['total_cost'] ?>        
      </td>
    </tr>
  <?php
  }
}





// FIXME: Cambio de valor de Mesa
function changeAvailable($tableSelect, $val)
{
  require 'connection.php';

  try{
    $_UPDATEtable_SQL = "UPDATE tables SET available = '$val' WHERE tables.id_table = $tableSelect";
    $updateTable = mysqli_query($con, $_UPDATEtable_SQL);
  } catch (\Exception $e) {}
}
 

// FIXME: Actualizar consumo
function updateConsumo($id_cons, $desc, $const)
{
  require 'connection.php';
  try {

    $_INSERTconsumo_SQL =  "INSERT INTO consumo (id_cons, descript, total_cost) VALUES ('$id_cons', '$desc', '$const')";
    $insertConsumo = mysqli_query($con, $_INSERTconsumo_SQL);

  } catch (\Exception $e) {}
}

// FIXME: Guardar reservacion
function saveReservation($name, $num_p, $table)
{
  require 'connection.php';

  $today = date('Y-m-d');

  try {
    $_COUNT_SQL = "SELECT count(*) AS total FROM reservations";
    $resultCount = mysqli_query($con, $_COUNT_SQL);

    while ($consult = mysqli_fetch_array($resultCount)) {
      $resultCountN = $consult['total'];
      $cons_asing = $resultCountN + 1;
    }
  } catch (\Exception $e) {}


  try {

    $_INSERTreservation_SQL = "INSERT INTO reservations(date, name, num_person, consumo_asigned, table_asigned, fact)
    VALUES ('$today', '$name', '$num_p', '$cons_asing', '$table', '0')";

    $insertReservation = mysqli_query($con, $_INSERTreservation_SQL);

    if ($insertReservation) {
      updateConsumo($cons_asing, '0' , '0');

      $val = '1';
      changeAvailable($table, $val);
    }

  } catch (\Exception $e) {}
  ?>
  <script type="text/javascript">
    setTimeout("window.location.href = 'tables.php'", 0000)
  </script>
  <?php

}



?>
