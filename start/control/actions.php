<?php

// FIXME: Guardar una reservación

if (isset($_REQUEST['asigned'])) {
  
  // Obtemos datos de la reservación
  $name = $_REQUEST['name'];
  $num_p = $_REQUEST['numP'];
  $table = $_REQUEST['tablesSelect'];

  print "Si entro al if";
  require '../model/methods.php';
  saveReservation( $name, $num_p, $table);
}

if (isset($_REQUEST['asignedConsumo'])) {

	$selectCons = $_REQUEST['selectCons'];
	$cons = $_REQUEST['consumo'];

	require '../model/methods.php';
	newConsumo($selectCons, $cons);
}

//FIXME: Guardar un nuevo Usuario
if (isset($_REQUEST['finish'])) {
	$name = $_REQUEST['name'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$tel = $_REQUEST['tel'];
	$category = $_REQUEST['category'];
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	require '../model/methods.php';
	saveUser($name, $lastname, $email, $tel, $category, $user, $pass);
}

?>
