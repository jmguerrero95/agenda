<?php
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$dat_emple=$inicio->consul_emple();
$conteo=count($dat_emple);
?>
<page backtop="15mm" backbottom="15mm" backleft="10mm" backright="10mm">
<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
<h1 align="center" id="empresa_pdf"><span id="empresa2_pdf">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
<br><br>
<h1 align="center">Lista de Empleados</h1>
<br><br><br><br>
<table border="1" align="center" id="tabla_pdf">
<tr>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Cedula</td>
	<td>Estudio</td>
	<td>Especialidad</td>
	<td>Email</td>
</tr>
<?php 
	for ($i=0; $i <= $conteo-1 ; $i++) { 
		?><tr><?php
		for ($x=0; $x <= 5; $x++) { 
			?><td><?php echo $dat_emple[$i][$x]?></td><?php
		}
		?></tr><?php
	}
?>
</table>
</page>
