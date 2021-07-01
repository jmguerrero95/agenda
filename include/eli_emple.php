<?php
$cedula=$_GET['id'];
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$inicio->eli_emple($cedula);
echo "<script language='javascript'>alert('Empleado elimiado con exito');history.back(1)</script>";
?>