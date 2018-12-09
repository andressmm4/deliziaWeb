<?php

// FIXME: Mesas disponibles
function showTablesDis()
{
  require_once 'connection.php';

  $_SELECT_SQL = "SELECT * FROM tables WHERE tables.available = '0'";
  $result = mysqli_query($con, $_SELECT_SQL);

  while ($consult = mysqli_fetch_array($result)) {
    ?>
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
            <input type="button" class="btn btn-success" value="Asignar">
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
  require_once 'connection.php';

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
          <p class="card-category">Mesa cupada por:</p>
          <h3 class="card-title"><?php print $consult['num_person']; ?></h3>
        </div>
        <div class="card-footer">
          <div class="">
            <a href="#" class="btn btn-success">Asignar</a>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
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
  $_UPDATEtable_SQL = "UPDATE tables SET available = '$val' WHERE tables.id_table = $tableSelect";
  $updateTable = mysqli_query($con, $_UPDATEtable_SQL);
}

// FIXME: Actualizar consumo
function updateConsumo($id_cons, $desc, $const)
{
  require 'connection.php';
  try {

    $_INSERTconsumo_SQL =  "INSERT INTO consumo (id_cons, descript, total_cost) VALUES ('$id_cons', '$desc', '$const')";
    $insertConsumo = mysqli_query($con, $_INSERTconsumo_SQL);

    if ($insertReservation) {
      ?>
      <script type="text/javascript">
        console.info("Datos de tb consumo guardados")
      </script>
    <?php
    } else {
    ?>
      <script type="text/javascript">
        console.error("Datos de tb consumo no guardados")
      </script>
      <?php
    }

  } catch (\Exception $e) {}
}

// FIXME: Guardar reservacion
function saveReservation($name, $num_p, $table)
{
  require 'connection.php';
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
    ?>
      <script type="text/javascript">
        console.info("Datos de tb reservations guardados")
      </script>
    <?php

      updateConsumo($cons_asing, '0' , '0');

      $val = '1';
      changeAvailable($table, $val);

    } else {
    ?>
      <script type="text/javascript">
        console.error("Datos de tb reservations no guardados")
      </script>
    <?php
    }

  } catch (\Exception $e) {}
  ?>
  <script type="text/javascript">
    setTimeout("window.location.href = 'reservation.php'", 3000)
  </script>
  <?php

}
?>
