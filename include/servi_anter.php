<?php
$fecha=$_POST['fecha'];
$cedula=$_POST['cedula'];
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$respuesta=$cliente->datos_agenda($fecha,$cedula);
echo json_encode($respuesta);

?>