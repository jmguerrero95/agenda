<?php
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio/index.php','uri'=>'urn:agenda',));
$dat_emple=$inicio->consul_emple();
echo json_encode($dat_emple);
?>