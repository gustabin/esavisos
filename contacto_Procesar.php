<?php
    include "tools/corelib.php";
	$nombre = $_POST ['nombre']; 
	$correo = $_POST ['correo'];
	$titulo = $_POST ['titulo'];
	$mensaje = $_POST ['mensaje'];
	
	//==========================validar que el nombre no este vacio===================
	if ($nombre==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '1');
		die(json_encode($data));
	}	
	
	//==========================validar que el correo no este vacio===================
	if ($correo==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '2');
		die(json_encode($data));
	}		
	
	//==========================validar que el titulo no este vacio===================
	if ($titulo==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '3');
		die(json_encode($data));
	}

	//==========================validar que el mensaje no este vacio===================
	if ($mensaje==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '4');
		die(json_encode($data));
	} 
	
		// ========================================envio de correo notificandome que un lector nos contacto ===================
		
		$destino ="asistentetumacaed@gmail.com"; 
		$asunto = "Contacto Web www.esavisos.com";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un lector te ha contactado por el formulario de esavisos</h2>
		Los datos enviados son los siguientes:<br>
		<b>Nombre: </b>$nombre<br>
		<b>Correo: </b>$correo<br>
		<b>Titulo: </b>$titulo<br>
		<b>Mensaje: </b>$mensaje<br>
		 Tus amigos en esavisos.com<br>
		<img src=".INCLUDES."ContactoClientes.jpg />
		<p>	
		<h5>Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana,  <br>
		Maracay, Estado Aragua | (0243) 554-4867 |<br>
		RIF J07508704-6<br> <br>
		<img src=".INCLUDES."ellogotabin.png />
		<p></p>Designed by Ing Gustavo Arias<br>
		© tabin, c.a. 2014 - All rights reserved<br></h5>	
		</p>";
		$yourWebsite = "esavisos.com";
		$yourEmail   = "contacto@esavisos.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);	 

		//===================================================Redirigir a otra pagina============================================				
		$data=array("exito" => '1');
		die(json_encode($data));
?>