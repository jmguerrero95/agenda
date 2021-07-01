<!DOCTYPE html>
<?php
include('../include/seguridad.php');
?>
<html>
<head>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
  <script src="../js/tether.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="../estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../estilos/tether.min.css">
	<title>Buscar</title>
</head>
<body>
	<h1 align="center" id="empresa"><span id="empresa2">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
	<br/><br/><br/><br/>
	<ul>
		<li><a href="busqueda.php">Inicio</a></li>
		<li><a class="active" href="#">Empleados</a></li>
		<li><a href="../include/empleados_pdf.php">Reporte</a></li>
    <li><a href="../include/cerrar_session.php">Cerrar sesion</a></li>
	</ul>
  
      <form action="../include/act_emple.php" method="post">
      <div id="datos">
      </div>
    <script type="text/javascript">
      $(document).ready( function() 
      {
        $.ajax({
          async: false,
          type: "POST",
          url: "../include/consul_emple.php",
          data: {},
          success: function(data) {
            var json_obj = $.parseJSON(data); // lo convierte a Array
            var num=json_obj.length;
            var tabla="";
            var a="<td>";
            var b="</td>";
            var hola="hola";
            tabla+='<table id="tab_empleados" class="table table-bordered">';
            tabla+='<tr>';
            tabla+='<td>Nombre</td>';
            tabla+='<td>Apellido</td>';
            tabla+='<td>Cedula</td>';
            tabla+='<td>Estudio</td>';
            tabla+='<td>Especialidad</td>';
            tabla+='<td>Email</td>';
            tabla+='</tr>';
            for(i in json_obj){
              tabla+="<tr>";
                tabla+='<td><input type="text" value="'+json_obj[i][0]+'" name="nombre'+i+'">'+'</td>';
                tabla+='<td><input type="text" value="'+json_obj[i][1]+'" name="apellido'+i+'">'+'</td>';
                tabla+='<td><input type="text" value="'+json_obj[i][2]+'" name="cedula'+i+'">'+'</td>';
                tabla+='<td><input type="text" value="'+json_obj[i][3]+'" name="estudio'+i+'">'+'</td>';
                tabla+='<td><input type="text" value="'+json_obj[i][4]+'" name="especialidad'+i+'">'+'</td>';
                tabla+='<td><input type="text" value="'+json_obj[i][5]+'" name="email'+i+'">'+'</td>';
                tabla+='<td><a href="../include/eli_emple.php?id='+json_obj[i][2]+'"><button type="button">Eliminar</button></a></td>';
              tabla+="</tr>"
            }
            //document.write($valor);
            tabla+='</table>';
            tabla+='<input type="hidden" name="principal" value="'+i+'">';
            //document.write(valor);
            /*for (var i=0;i<=num;i++){
              tabla+="<tr>";
              for (var x=0;x<6;x++){
                tabla+=a+json_obj[i][x]+b;
              }
              tabla+="</tr>"
            }*/
            $("#datos").append(tabla);
          },
           error: function(data) {
          }
        });
      })
    </script>
  <br/><br/><br/><br/><br/>
	<div id="principal">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Registrar empleado</button>
    <input type="submit" name="Guardar" value="Guardar" class="btn btn-primary">
	</div>
  </form>
	</br></br></br>
	

<!--A partir de aqui modal-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro de empleado</h4>
      </div>
      <div class="modal-body">
        <div id="formulario">
          	<form id="regis_empleados" method="post">
          		<label>Nombre</label>
          		<input type="text" name="nombre"><br/><br/>
          		<label>Apellido</label>
          		<input type="text" name="apellido"><br/><br/>
          		<label>Cedula de identidad</label>
          		<input type="text" name="cedula"><br/><br/>
          		<label>Nivel de estudio</label>
          		<input type="text" name="estudio"><br/><br/>
          		<label>Especialidad</label>
          		<input type="text" name="especialidad"><br/><br/>
          		<label>Email</label>
          		<input type="text" name="email"><br/><br/>
          		<input type="button" name="registrar" id="registrar" value="Registrar" data-dismiss="modal">
          	</form>
        </div>
        <div id="exito" style="display:none">
          bien

        </div>
        <div id="fracaso" style="display:none">
          mal
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--jquery ajax-->
<script type="text/javascript">
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#registrar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
            $.post("../include/regis_empleados.php",$("#regis_empleados").serialize(),function(res){
                $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } else{ 
                if (res == 0) {
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }}
                document.location.href = document.location.href;
            });
    });    
});
</script>
</body>
</html>