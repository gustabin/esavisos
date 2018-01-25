<?php
	session_start();  
	include "tools/corelib.php";
	error_reporting(0);
		// conector de BD 
	require_once('tools/mypathdb.php');

//=================================Datos del cliente =================
$userID= $_SESSION['userID'];

if (!empty($_GET ['status'])) 
	{		
	$status = $_GET ['status'];
	switch ($status) 
		{
		case 1:
			$condicion = "Hemos procesado un pago para publicar lo siguiente:";
			break;
		case 2:
			$condicion = "No se completó el pago";
			break;
		case 3:
			$condicion = "El pago está siendo revisado";
			break;
		case 4:
			$condicion = "El pago fué rechazado, debe intentar nuevamente el pago";
			break;
		case 5:
			$condicion = "No se completó el proceso de pago, no se ha generado ningún pago";
			break;
		}
	}
$_SESSION['condicion'] = $condicion;
			// =========================Actualizar el campo av_pendiente en la tabla avisos ==================
			
			$query_avisos = mysql_query("UPDATE tbl_avisos SET av_pendiente='FALSE' WHERE av_id= '$userID'");


			if($query_avisos == false) 
			{
				$data=array("error" => '2');
				die(json_encode($data));

		} else 
		{
        // ========================================envio de correo al usuario ===================

		$destino = $email;

		$asunto = "Gracias por anunciar con nosotros - el siglo";

		$cabeceras = "Content-type: text/html";

		$cuerpo ="<h2>Anunciante - esavisos.com te publica!</h2><br>

        Estimado <b>$nombre $apellido</b>,<br>	
		
		<b>$condicion<br>				

		<b>Texto del minianuncio:  </b>$textoAviso<br>

		<b>Sección:  </b>$seccion<br>

		<b>Número de dias: </b>$dias<br>

		<b>Número de palabras: </b>$palabras<br>

		<b>Palabras adicionales:  </b>$adicionales<br>

		<b>Subtotal: </b>$subtotal<br>

		<b>IVA:  </b>$iva<br>

		<b>Total:  </b>$total<br>

        <a href=".SERVER."/login.php>Ingresa a tu cuenta</a>  con tu nombre de usuario: <b> $email </b><br>

		y tu clave:  <b> $clave </b><br><br> 

        Tus amigos en esavisos.com<br>

		<img src=".INCLUDES."avisosonline.jpg />

		<p>	

		<h5>Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana,  <br>

		Maracay, Estado Aragua | (0243) 554-4867 |<br>

		RIF J07508704-6<br> 

		<img src=".INCLUDES."ellogotabin.png />

		<p></p>Designed by Ing Gustavo Arias<br>

		© tabin, c.a. 2014 - All rights reserved<br></h5>		

		</p>";

		$yourWebsite = "esavisos.com";
		$yourEmail   = "contacto@esavisos.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);
		header("Location: escribirtxt2.php");
		}
        ?>