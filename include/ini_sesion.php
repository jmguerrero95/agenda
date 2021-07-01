<?php
$ingreso=array();
$usuario=$_POST['nom_usu'];
$contrase=$_POST['contra'];
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$ingreso=$inicio->inisecre($usuario,$contrase);
if ($ingreso==2||$ingreso==3) {
	session_start();
	$_SESSION['logueado']="si";
	$_SESSION['permiso']=$ingreso;
	header('Location: ../paginas/busqueda.php');
}
else
	if ($ingreso==1){
	echo "<script language='javascript'>alert('No tiene permisos suficientes para usar esta aplicacion, sera dirigido a la aplicacion ideal a su tipo de usuario.');history.back(1)</script>";	
	}else
	echo "<script language='javascript'>alert('Datos Incorrectos Por Favor Verifique su Usuario y/o Contraseña');history.back(1)</script>";
?>