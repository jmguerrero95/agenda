<?php
session_start();
$datos=array();
$datos=$_SESSION['cliente'];
?>
<page backtop="15mm" backbottom="15mm" backleft="10mm" backright="10mm">
<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
<h1 align="center" id="empresa_pdf"><span id="empresa2_pdf">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
<br>
<h1 align="center" style="color:#C21416;">Informacion de cliente</h1>
<br><br><br>
<h2 align="center">Datos personales</h2>
<table border="1" align="center" id="tabla_pdf">
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Cedula</td>
		<td>Fecha de nacimiento</td>
		<td>Email</td>
		<td>Telefono local</td>
		<td>Telefono Movil</td>
	</tr>
	<tr>
		<td><?php echo $datos[0]?></td>
		<td><?php echo $datos[1]?></td>
		<td><?php echo $datos[2]?></td>
		<td><?php echo $datos[3]?></td>
		<td><?php echo $datos[4]?></td>
		<td><?php echo $datos[5]?></td>
		<td><?php echo $datos[5]?></td>
	</tr>
</table>
<br><br><br><br><br>
<h2 align="center">Domicilio</h2>
<table border="1" align="center" id="tabla_pdf">
	<tr>
		<td>Estado</td>
		<td>Municipio</td>
		<td>Parroquia</td>
		<td>Urbanizacion o barrio</td>
		<td>Av/Calle</td>
		<td>Sector</td>
		<td>Edificio/Casa</td>
		<td>referencia</td>
	</tr>
	<tr>
		<td><?php echo $datos[8]?></td>
		<td><?php echo $datos[9]?></td>
		<td><?php echo $datos[10]?></td>
		<td><?php echo $datos[11]?></td>
		<td><?php echo $datos[12]?></td>
		<td><?php echo $datos[13]?></td>
		<td><?php echo $datos[14]?></td>
		<td><?php echo $datos[15]?></td>
	</tr>
</table>
</page>