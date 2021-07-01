<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$estudio=$_POST['estudio'];
$especialidad=$_POST['especialidad'];
$email=$_POST['email'];
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$ingreso=$inicio->agre_empleados($nombre, $apellido, $cedula, $estudio, $especialidad, $email);
echo $ingreso;
?>