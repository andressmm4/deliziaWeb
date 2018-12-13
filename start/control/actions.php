<?php

// FIXME: Guardar una reservación

if (isset($_REQUEST['asigned'])) {
  
  // Obtemos datos de la reservación
  $name = $_REQUEST['name'];
  $num_p = $_REQUEST['numP'];
  $table = $_REQUEST['tablesSelect'];

  require '../model/methods.php';
  saveReservation( $name, $num_p, $table);

}

?>
