<?php
//Inicio la sesión
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["logueado"] != "si") {
 echo "<script language='javascript'>alert('No tiene permisos para acceder a esta pagina.');window.location.href='../index.php'</script>";
 //ademas salgo de este script
 exit();
} 
?>
