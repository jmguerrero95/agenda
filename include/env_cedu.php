<?php
$info=array();
$cedula=$_POST['cedula'];
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$info=$cliente->env_cedu($cedula);
echo "hola";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hola</h1>
</body>
</html>