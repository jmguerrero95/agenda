<?php
$info=array();
$cedula=$_POST['cedula'];
$cliente = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$info=$cliente->env_cedu($cedula);
session_start();
$_SESSION['cliente']=$info;
$datos=$cliente->precios();
$dat_agen=$cliente->consultaragenda($cedula);
$empleados=$cliente->consul_emple();
echo'
	<form method="POST" action="../include/insertagenda.php">
	<div class="tabla">
		<table cellspacing="10px">
			<tr>
					<h2>Datos personales</h2>
					</br>	
			</tr>
			<tr>
				<td>
					<label>Nombres</label>
					<input type="text" name="nombre" id="nombre" required value="'.$info[0].'">	
				</td>
				<td>
					<label>Apellidos</label>
					<input type="text" name="apellido" id="apellido" required value="'.$info[1].'">		
				</td>
				<td>
					<label>Cédula</label>
					<input type="number" name="cedula" id="cedula" required value="'.$info[2].'">		
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha de nacimiento</label>
					<input type="date" name="f_naci" id="f_naci" required value="'.$info[3].'">		
				</td>
				<td>
					<label>E-mail</label>
					<input type="email" name="email" id="email" required value="'.$info[4].'">	
				</td>
				<td>
					<label>Teléfono local</label>
					<input type="text" name="tele_local" id="tele_local" required value="'.$info[5].'">		
				</td>
				<td>
					<label>Teléfono móvil</label>
					<input type="text" name="tele_movil" id="tele_movil" value="'.$info[6].'">		
				</td>
			</tr>

			<tr>
				<td>
					<br/>
					<h2>Domicilio</h2>
					</br>
				</td>	
			</tr>
			<tr>
				<td>
					<label>Estado</label>
					<input type="text" name="estado" id="estado" required value="'.$info[8].'">	
				</td>
				<td>
					<label>Município</label>
					<input type="text" name="municipio" id="municipio" required value="'.$info[9].'">		
				</td>
				<td>
					<label>Parroquia</label>
					<input type="text" name="parroquia" id="paroquia" required value="'.$info[10].'">		
				</td>
				<td>
					<label>Urbanización o barrio</label>
					<input type="text" name="barrio" id="barrio" required value="'.$info[11].'">		
				</td>
			</tr>
			<tr>
				<td>
					<label>Av/Calle/Esquina/Carrera</label>
					<input type="text" name="av" id="av" required value="'.$info[12].'">	
				</td>
				<td>
					<label>Sector</label>
					<input type="text" name="sector" required id="sector" value="'.$info[13].'">		
				</td>
				<td>
					<label>Edificio/Quinta/Casa</label>
					<input type="text" name="casa" required id="casa" value="'.$info[14].'">		
				</td>
				<td>
					<label>Punto de referencia</label>
					<input type="text" name="referen" required id="referen" value="'.$info[15].'">		
				</td>
			</tr>
		<a href="../include/clien_pdf.php"><button type="button">Generar pdf</button></a>

		</table>
		<br/>
		<table cellspacing="10px">
			<tr>
				<td>
				</br>
					<h2>Servicio a realizar</h2>
				</br>
				</td>	
			</tr>
			<tr>
				<td>
					<div>	
						<label class="ti_fecha">Fecha</label>
						<input type="date" name="fecha" id="fecha">
						<label class="ti_hora">Hora</label>
						<input type="time" name="hora" id="hora">
						';
						if ($dat_agen[0][0]) {
							$i=0;
							echo '
							<select class="ti_hora" name="servi_anter" id="servi_anter">
							<option value="nuevo" id="nuevo" >Servicios Anteriores</option>
								';
							while ($dat_agen[$i][0]) {
								echo '
								<option>'.$dat_agen[$i][0].'</option>';
								$i++;
							}
							echo '</select>';
						};
						$i=0;
							echo '
							<select class="ti_hora" name="nom_emple" id="nom_emple">
							<option value="nuevo" id="nuevo" >Seleccione empleado</option>
								';
							while ($empleados[$i][0]) {
								echo '
								<option value="'.$empleados[$i][2].'" name="'.$empleados[$i][2].'">'.$empleados[$i][0].'</option>';
								$i++;
							}
							echo '</select>';
						echo'		
					</div>			
				</td>
			</tr>
			<tr>
				<td>
					<br/>
					<label>Actividad</label>
					<br/>
					<textarea name="actividad" id="actividad" cols="106" rows="3"></textarea>
					<input type="hidden" name="id" id="id">
				</td>
			</tr>
			<tr>
				<td>
					<label>Direccion</label>
					<br/>
					<textarea name="direccion" id="direccion" cols="106" rows="3"></textarea>
				<td/>
			</tr>
			<tr>
				<td>
					<input type="radio" class="local" name="tipo" value="casa">Casa
					<div style="display:none" id="fu_casa" class="desc">
					<p style="color:red">Especifique cantidad de habitaciones</p>
					<input type="number" id="val_casa" >
				</td>
			</tr>
			<tr>
				<td>
					<div style="display:none" id="div_casa">
						<p>Precio Aproximado (Incluye IVA)</p>
						<input type="text" id="resul_casa" name="resul_casa">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" class="local2" name="tipo" value="local">Local
					<div style="display:none" id="fu_local" class="desc">
					<p style="color:red">Especifique cantidad de mts2</p>
					<input type="number" id="val_local">
				</td>
			</tr>
			<tr>
				<td>
					<div style="display:none" id="div_local">
						<p>Precio Aproximado (Incluye IVA)</p>
						<input type="text" id="resul_local" name="resul_local">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					
					<input type="submit" value="Guardar">
				</td>
			</tr>
		</table>
	</div>
	</form>
	<input type="text" style="display:none" id="pre_casa" value="'.$datos[0].'">
	<input type="text" style="display:none" id="pre_local" value="'.$datos[1].'">
';
?>