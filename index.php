<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1 align="center" id="empresa"><span id="empresa2">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
    <br/><br/><br/><br/>
<div id="inicio_se">
    <h2 align="center">Inicio de sesion</h2>
    
    <form action="include/ini_sesion.php" method="POST">
    	<table align="center" cellpadding="5px" cellspacing="5px">
    		<tr>
                <br/><br/>
    			<td>
    				<h5><label><b>Nombre de usuario</b></label></h5>
    				<input type="text" id="nom_usu" name="nom_usu" class="nom_usu">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<h5><label><b>Contraseña</b></label></h5>
    				<input type="password" id="contra" name="contra" class="contra">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<input type="submit" value="Ingresar" id="ingresar" class="ingresar">
    			</td>
    		</tr>
    	</table>
    </form>
</div>
</body>
</html>