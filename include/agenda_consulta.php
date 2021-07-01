<?php
$id=$_GET['id'];
$info=array();
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$info=$cliente->consultaragenda($id);
?>
<h2 align="center">Agenda</h2>
	<a href="include/consultar.php">boton</a>
	<form action="editaragenda.php" method="POST">
	<table>
		<tr>
			<td>
				<label>Fecha</label>
				<input type="date" name="fecha" id="fecha" value="<?php echo $info[1] ?>">	
			</td>
			<td>
				<label>Hora</label>
				<input type="time" name="hora" id="hora" value="<?php echo $info[2] ?>">		
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<label>Actividad</label>
				<br/>
				<textarea name="actividad" id="actividad" cols="110" rows="3"><?php echo $info[3] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Direccion</label>
				<br/>
				<textarea name="direccion" id="direccion" cols="110" rows="3"><?php echo $info[4] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
			    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
				<input type="submit" value="Guardar">
			</td>
		</tr>
	</table>
	</form>