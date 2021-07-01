<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<title>agenda online</title>
</head>
<body>
	<button><a href="../include/consulta.php" id="consulta">consulta</a></button>
	<br/><br/>
	<form action="../include/insertagenda.php" method="POST">
	<table cellspacing="10px" class="tabla" align="center">
		<tr>
			<td>
				<h2 align="center">Datos personales</h2>
			</td>	
		</tr>
		<tr>
			<td>
				<label>Nombres</label>
				<input type="text" name="nombre" id="nombre">	
			</td>
			<td>
				<label>Apellidos</label>
				<input type="text" name="apellido" id="apellido">		
			</td>
			<td>
				<label>Cedula</label>
				<input type="text" name="cedula" id="cedula">		
			</td>
		</tr>
		<tr>
			<td>
				<label>F. de nacimiento</label>
				<input type="date" name="f_naci" id="f_naci">		
			</td>
			<td>
				<label>Email</label>
				<input type="text" name="email" id="email">	
			</td>
			<td>
				<label>Telefono local</label>
				<input type="text" name="tele_local" id="tele_local">		
			</td>
			<td>
				<label>Telefono movil</label>
				<input type="text" name="tele_movil" id="tele_movil">		
			</td>
		</tr>
	</table>

	<br/><br/><br/>

	<table cellspacing="10px" class="tabla" align="center">
		<tr>
			<td>
				<h2 align="center">Domicilio</h2>
			</td>	
		</tr>
		<tr>
			<td>
				<label>Estado</label>
				<input type="text" name="estado" id="estado">	
			</td>
			<td>
				<label>Municipio</label>
				<input type="text" name="municipio" id="municipio">		
			</td>
			<td>
				<label>parroquia</label>
				<input type="text" name="parroquia" id="paroquia">		
			</td>
		</tr>
		<tr>
			<td>
				<label>Urbanizacion o barrio</label>
				<input type="text" name="barrio" id="barrio">		
			</td>
			<td>
				<label>Avenida/Calle/Esquina/Carrera</label>
				<input type="text" name="av" id="av">	
			</td>
			<td>
				<label>Sector</label>
				<input type="text" name="sector" id="sector">		
			</td>
		</tr>
		<tr>
			<td>
				<label>Edificio/Quinta/Casa</label>
				<input type="text" name="casa" id="casa">		
			</td>
			<td>
				<label>Punto de referencia</label>
				<input type="text" name="referen" id="referen">		
			</td>
		</tr>
	</table>
	<br/><br/><br/>
	<table class="tabla" align="center">
		<tr>
			<td>
				<h2 align="center">Servicio a realizar</h2>
			</td>	
		</tr>
		<tr>
			<td>
				<label>Fecha</label>
				<input type="date" name="fecha" id="fecha">	
				<label>Hora</label>
				<input type="time" name="hora" id="hora">		
			</td>
		</tr>
		<tr>
			<td>
				<br/>
				<label>Actividad</label>
				<br/>
				<textarea name="actividad" id="actividad" cols="110" rows="3"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Direccion</label>
				<br/>
				<textarea name="direccion" id="direccion" cols="110" rows="3"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Guardar">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>