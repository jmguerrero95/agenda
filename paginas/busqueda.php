<!DOCTYPE html>
<?php
include('../include/seguridad.php');
?>
<html>
<head>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="../estilos/bootstrap.css">
	<title>Buscar</title>
</head>
<body>
	<h1 align="center" id="empresa"><span id="empresa2">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
	<br/><br/><br/><br/>
	<ul>
		<li><a class="active" href="#">Inicio</a></li>
		<li><a href="empleados.php">Empleados</a></li>
		<li><a href="../include/cerrar_session.php">Cerrar sesion</a></li>
	</ul>
	<div id="principal">
		<form id="form" method="POST">
			<label><b>Cédula o Rif</b></label>
			<input type="text" id="cedula" name="cedula">
			<input type="button" id="botonenviar" value="Buscar">
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready( function() { // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
			$("#botonenviar").click( function() { // Con esto establecemos la acción por defecto de nuestro botón de enviar.
				$.post("env_cedu.php",$("#form").serialize(),function(htmlexterno){
					$("#cargaexterna").html(htmlexterno);
					$("#cargaexterna").show("slow");
					$pre_casa = $("#pre_casa").val();
					$pre_local = $("#pre_local").val();
					//$("#casa").hide();
	 				$(".local").on('change', function() {
		 				if ($(this).is(':checked')){
		 				$("#fu_casa").show("slow");
		 				$("#fu_local").hide("slow");
		 				$("#div_local").hide("slow");
		 				$("#val_casa").keyup(function () {
              				$a = $(this).val();
							$c = $a * $pre_casa;
							$d = $c * 0.12;
							$d =  $d + $c;
							$("#div_casa").show("slow");
							$("#resul_casa").val($d);
          				});
		 				/*$("#cal_casa").click(function(){
			 				$a = $("#val_casa").val();
							$b = 2;
							$c = $a * $b;
							$("#div_casa").show("slow");
							$("#resul_casa").val($c);
		 					//$("#nombre3").val($("#nombre2").val());
		 				});*/
	 				}});
	 				$(".local2").on('change', function() {
		 				if ($(this).is(':checked')){
		 				$("#fu_local").show("slow");
		 				$("#fu_casa").hide("slow");
		 				$("#div_casa").hide("slow");
		 				$("#val_local").keyup(function () {
              				$a = $(this).val();
							$c = $a * $pre_local;
							$d = $c * 0.12;
							$d =  $d + $c;
							$("#div_local").show("slow");
							$("#resul_local").val($d);
          				});
		 				/*$("#cal_local").click(function(){
			 				$a = $("#val_local").val();
							$b = 4;
							$c = $a * $b;
							$("#div_local").show("slow");
							$("#resul_local").val($c);
						});*/
	 				}});
	 				$("#servi_anter").on('change', function(){
	    		var fecha = $(this).val();
	    		var cedula = $("#cedula").val();
			    $.ajax({
			    	async: false,
			        url: "../include/servi_anter.php",
			       type: "POST",
			       data: "fecha="+fecha+"&cedula="+cedula,
			       success: function(data){
			         var json_obj=$.parseJSON(data);
			         $('#id').val(json_obj[0]);
			         $('#fecha').val(json_obj[2]);
			         $('#hora').val(json_obj[3]);
			         $('#actividad').val(json_obj[5]);
			         $('#direccion').val(json_obj[6]);
			       }
			    });
	    	});
	 				
				});	
			});

		});
	</script>
	</br></br></br>
	
<div style="display:none" id="cargaexterna">
</div>

</body>
</html>