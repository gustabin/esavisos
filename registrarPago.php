<?php

	session_start();  

	include "tools/corelib.php";

	error_reporting(0);

		// conector de BD 

		require_once('tools/mypathdb.php');



$dias= $_SESSION['dias'];

$fecha= $_SESSION['fecha'];

$palabras= $_SESSION['palabras'];

$adicionales= $_SESSION['adicionales'];

$subtotal= number_format($_SESSION['subtotal'], 2, '.', '');

$iva= number_format($_SESSION['iva'], 2, '.', '');

$total= number_format($_SESSION['total'], 2, '.', '');

$textoAviso= $_SESSION['textoAviso'];

$seccion= $_SESSION['seccion'];



//=================================Datos del cliente =================

$userID= $_SESSION['userID'];

$email= $_SESSION['email'];

$nombre= $_SESSION['nombre'];

$apellido= $_SESSION['apellido'];

$empresa= $_SESSION['empresa'];

$cedulaRif= $_SESSION['cedulaRif'];

$direccion= $_SESSION['direccion'];


			// ===============================================Grabar los datos ===============================================

			// ===============================================Insertar los datos en la tabla=====================================

			$query_avisos = mysql_query("INSERT INTO tbl_avisos (av_userID, av_dias, av_fecha, av_palabras, av_adicionales, av_subtotal, av_iva, av_total, av_textoAviso, av_seccion, av_fechaVenta, av_pendiente) VALUES ('$userID', '$dias', '$fecha', '$palabras', '$adicionales', '$subtotal', '$iva', '$total', '$textoAviso', '$seccion', NOW(), TRUE)");

switch ($seccion) {
    case 1:
        $nombreSeccion = "Apartamentos alquiler";
		break;
    case 2:
        $nombreSeccion = "Apartamentos venta";
		break;
    case 3:
        $nombreSeccion = "Casas alquiler";
		break;
	case 4:
        $nombreSeccion = "Casas venta";
		break;
    case 5:
        $nombreSeccion = "Condominios";
		break;
    case 6:
        $nombreSeccion = "Quintas alquiler";
		break;
	case 7:
        $nombreSeccion = "Quintas Venta";
		break;
    case 8:
        $nombreSeccion = "Galpones alquiler";
		break;
    case 9:
        $nombreSeccion = "Galpones venta";
		break;
	case 10:
        $nombreSeccion = "Habitaciones alquiler";
		break;
    case 11:
        $nombreSeccion = "Locales alquiler";
		break;
    case 12:
        $nombreSeccion = "Locales venta";
		break;
	case 13:
        $nombreSeccion = "Oficinas venta";
		break;
    case 14:
        $nombreSeccion = "Oficinas alquiler";
		break;
    case 15:
        $nombreSeccion = "Parcelas y terrenos";
		break;
	case 16:
        $nombreSeccion = "Animales";
		break;
    case 17:
        $nombreSeccion = "Belleza";
		break;
    case 18:
        $nombreSeccion = "Cerámicas";
		break;
	case 19:
        $nombreSeccion = "Comidas";
		break;
    case 20:
        $nombreSeccion = "Compras varias";
		break;
    case 21:
        $nombreSeccion = "Cursos";
		break;
	case 22:
        $nombreSeccion = "Decoraciones";
		break;
    case 23:
        $nombreSeccion = "Electricidad";
		break;
    case 24:
        $nombreSeccion = "Empleos varios";
		break;
	case 25:
        $nombreSeccion = "Vacaciones / Turismo";
		break;
    case 26:
        $nombreSeccion = "Fumigaciones";
		break;
    case 27:
        $nombreSeccion = "Gimnasia";
		break;
	case 28:
        $nombreSeccion = "Guardería";
		break;
    case 29:
        $nombreSeccion = "Hipotecas y préstamos";
		break;
    case 30:
        $nombreSeccion = "Institutos educacionales";
		break;
	case 31:
        $nombreSeccion = "Maquinarias compra-venta";
		break;
    case 32:
        $nombreSeccion = "Motos compra-venta";
		break;
    case 33:
        $nombreSeccion = "Muebles compra-venta";
		break;
	case 34:
        $nombreSeccion = "Música";
		break;
    case 35:
        $nombreSeccion = "Negocios compra-venta";
		break;
    case 36:
        $nombreSeccion = "Profesionales";
		break;
	case 37:
        $nombreSeccion = "Servicios especializados";
		break;
    case 38:
        $nombreSeccion = "Teléfonos";
		break;
    case 39:
        $nombreSeccion = "Ventas varias";
		break;
	case 40:
        $nombreSeccion = "Vehículos compra-venta";
		break;
    case 41:
        $nombreSeccion = "Deportes";
		break;
    case 42:
        $nombreSeccion = "Auto escuelas";
		break;
	case 43:
        $nombreSeccion = "Veterinarios";
		break;
    case 44:
        $nombreSeccion = "Fiestas";
		break;
    case 45:
        $nombreSeccion = "Venta de acciones";
		break;
	case 46:
        $nombreSeccion = "Computación";
		break;
    case 47:
        $nombreSeccion = "Trajes alquiler y venta";
		break;
    case 48:
        $nombreSeccion = "Solo para adultos";
		break;
	case 49:
        $nombreSeccion = "Mensajes Amor / Amistad";
		break;
    case 50:
        $nombreSeccion = "Arte y espectáculos";
		break;
    case 51:
        $nombreSeccion = "Última hora";
		break;
	
}

			if($query_avisos == false) 
			{
				$data=array("error" => '2');
				die(json_encode($data));

		} else 
		{

		// ========================================envio de correo notificandome que un usuario se anuncio ===================

		$destino ="asistentetumacaed@gmail.com";
		
		$asunto = "Contacto Web esavisos";

		$cabeceras = "Content-type: text/html";

		$cuerpo ="<h2>Hola, un usuario se anuncio en esavisos</h2>

		Los datos enviados son los siguientes:<br>

		<b>Email: </b>$email<br>

		<b>Empresa: </b>$empresa<br>

		<b>Contacto: </b>$nombre $apellido<br>

		<b>Cedula / Rif: </b>$cedulaRif<br>

		<b>Dirección: </b>$direccion<br>
		
		<b>Sección: </b>$seccion &nbsp; $nombreSeccion<br>

		<b>Texto del minianuncio:  </b>$textoAviso<br>

		<b>Número de dias: </b>$dias<br>
		
		<b>Dias de publicación: </b>$fecha<br>

		<b>Número de palabras: </b>$palabras<br>

		<b>Palabras adicionales:  </b>$adicionales<br>

		<b>Subtotal: </b>$subtotal<br>

		<b>IVA:  </b>$iva<br>

		<b>Total:  </b>$total<br>

		

		Tus amigos en esavisos.<br>

		<img src=".INCLUDES."avisosonline.jpg />

		<p>		

		<img src=".INCLUDES."ellogotabin.png />

		<h5>Calle Sanchez Carrero Sur N° 58, Sector Centro<br>

		Maracay, Estado Aragua, 2103<br>
 
		RIF J403661448<br> 

		<p></p>Designed by tabinsoft<br>

		© tabinsoft 2014 - All rights reserved<br></h5>

		</p>";

		$yourWebsite = "esavisos.com";

		$yourEmail   = "sistemas@esavisos.com";
		
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;

		mail($destino,$asunto,$cuerpo,$cabeceras);	

					}
?>	

