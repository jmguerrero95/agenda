<?php
$principal=$_POST['principal'];
$datos=array();
for ($i=0; $i <= $principal; $i++) {  
	$datos[$i][0]=$_POST['nombre'.$i.''];
	$datos[$i][1]=$_POST['apellido'.$i.''];
	$datos[$i][2]=$_POST['cedula'.$i.''];
	$datos[$i][3]=$_POST['estudio'.$i.''];
	$datos[$i][4]=$_POST['especialidad'.$i.''];
	$datos[$i][5]=$_POST['email'.$i.''];
}

$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$resul=$cliente->act_emple($principal,$datos);
echo "<script language='javascript'>alert('Empleado modificado con exito');history.back(1)</script>"
?>