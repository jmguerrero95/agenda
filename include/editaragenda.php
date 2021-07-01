<?php
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$actividad=$_POST['actividad'];
$direccion=$_POST['direccion'];
$id=$_POST['id'];
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$respuesta=$cliente->editaragenda($fecha,$hora,$actividad,$direccion,$id);
echo $respuesta;
$aux="bien";
if ($respuesta==$aux) {
	echo "<script language='javascript'>alert('Actividad modificada con exito');history.back(1)</script>";
}else{
	echo '<script language="javascript">
			alert("Se produjo un error, contacte con el administrador del sistema \n \n'.$respuesta.'");
			history.back(1);
		  </script>';
}
?>