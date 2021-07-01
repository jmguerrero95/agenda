<?php
session_start();
session_destroy();
 echo "<script language='javascript'>alert('Cerraste sesion correctamente. Hasta pronto!!');window.location.href='../index.php'</script>";

?>