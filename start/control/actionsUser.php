<?php 
require '../model/user_validation.php';

if (isset($_REQUEST['login'])) {
    // obtemos loa valores del form
    $user = $_REQUEST['login_user'];
    $pass = $_REQUEST['pass'];
    // Ejecutamos la validacion del Usuario
    UserValidation($user, $pass);
  }
  
  // logout
  if (isset($_REQUEST['logout'])) {
    logaut();
  }
?>