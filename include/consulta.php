<?php
$info=array();
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$info=$cliente->consultarfechas();
?>
	<h2 align="center">consulta</h2><br/><br/>

<?php
foreach ($info as $aux):?>
	<table align="center">
		<tr>
			<td><a href="agenda_consulta.php?id=<?php echo $aux[0];?>"><?php echo $aux[1];?></a></td>
			<td><?php echo $aux[2];?></td>
			<td><?php echo $aux[3];?></td>
			<td><?php echo $aux[4];?></td>
		</tr>
	</table>
<?php endforeach
?>