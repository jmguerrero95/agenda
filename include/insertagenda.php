<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$f_naci=$_POST['f_naci'];
$email=$_POST['email'];
$tele_local=$_POST['tele_local'];
$tele_movil=$_POST['tele_movil'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$parroquia=$_POST['parroquia'];
$barrio=$_POST['barrio'];
$av=$_POST['av'];
$sector=$_POST['sector'];
$casa=$_POST['casa'];
$referen=$_POST['referen'];
$id=$_POST['id'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
echo $cedu_emple=$_POST['nom_emple'];
$actividad=$_POST['actividad'];
$direccion=$_POST['direccion'];
$tipo=$_POST['tipo'];
if ($tipo=='casa') {
	$precio=$_POST['resul_casa'];
}else{
	$precio=$_POST['resul_local'];
}
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
	$cliente->agregaragenda($nombre,$apellido,$cedula,$f_naci,$email,$tele_local,$tele_movil,$estado,$municipio,$parroquia,$barrio,$av,$sector,$casa,$referen,$id,$fecha,$hora,$actividad,$direccion,$tipo,$precio,$cedu_emple);
/*$cliente2 = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$resul=$cliente2->agre_actividades($fecha,$hora,$cedu_emple);*/
?> 