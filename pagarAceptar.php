<?php
// Buscar Cliente Autocomplete
	session_start();  

	$_SESSION['aceptar'] = $_POST['chk_aceptar'];

	if ($_SESSION['aceptar']==1) then {
		$data = array("exito" => '1');
		die(json_encode($data));		
	}else {
		$data = array("error" => '1');
		die(json_encode($data));
	}
?>