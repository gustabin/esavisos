<?php
// Buscar Cliente Autocomplete
	session_start();  

	$_SESSION['nombreCedula'] = $_POST['criterio'];
	

	$data = array("exito" => '1');
	die(json_encode($data));		

	//===================================================Redirigir a otra pagina============================================		
	//header("Location: historia.php")
?>