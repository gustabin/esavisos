<?php
	session_start();  
	include "tools/corelib.php";
	error_reporting(0);
		// conector de BD 
		require_once('tools/mypathdb.php');

		$email = $_POST ['Correo'];
		$clave = $_POST ['Clave'];
	
		//======================validar que el password tenga mas de 6 caracteres=======================================
		if (strlen($clave)<6) {
		//===================================================Redirigir a otra pagina============================================
			$data=array("error" => '1');
			die(json_encode($data));
			} 
			
			// si todo va bien
		
		$nombre = $_POST ['Nombre'];
		$apellido = $_POST ['Apellido'];
		$cedulaRif= $_POST['CedulaRif'];
		$empresa= $_POST['Empresa'];
		$direccion= $_POST['Direccion'];
		
		//$status = 1;//"1 Activo, 2 Inactivo";
		//$tipo = 1;//"1 Usuario, 2 Vendedor, 3 Administrador";

			// ===============================================Grabar los datos ===============================================
			// ===============================================Buscar los datos en la tabla=====================================	
			
	if(!empty($_SESSION['userID']))
		{
			$userID= $_SESSION['userID'];
			// ===============================================Insertar los datos en la tabla=====================================			
			$query_actualizarUsuario = mysql_query("UPDATE tbl_usuarios SET us_clave='$clave', us_nombre='$nombre', us_apellido='$apellido', us_cedulaRif='$cedulaRif', us_empresa='$empresa', us_direccion='$direccion' WHERE us_id= '$userID'");
			
			if($query_actualizarUsuario == false) 
			{
				$data=array("error" => '2');
				die(json_encode($data));
			}
			if($query_actualizarUsuario == true) 
			{
				$data=array("exito" => '1');
				die(json_encode($data));
			}
			
						
		} else {
			header("Location: login.php");
		}

		// ========================================envio de correo notificandome que un usuario cambio el perfil ===================
		$destino ="asistentetumacaed@gmail.com";
		$asunto = "Contacto Web esavisos";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un usuario cambio su perfil en esavisos</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Clave: </b>$clave<br>
		<b>Nombre: </b>$nombre $apellido<br>
		<b>Username:  </b>$username<br>
		<b>Status: </b>$status<br>
		<b>Tipo:  </b>$tipo<br>		
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
		$yourEmail   = "contacto@esavisos.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);	
		// ========================================envio de correo al usuario ===================
		$destino = $email;
		$asunto = "Actualizastes tu perfil en esavisos - el siglo";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>La web de anuncios online de el siglo</h2><br>
        Hola <b>$nombre $apellido</b>,<br>
        Hemos detectado que modificastes tus datos del perfil de tu cuenta. <br>
		<br>		
        Si estos cambios no fueron hechos por ti, por favor ponte en <a href=".SERVER."/contacto.php>contacto</a> con nosotros.<br><br>
        <a href=".SERVER."/login.php>Ingresa a tu cuenta</a>  con tu nombre de usuario: <b> $email </b><br>
		y tu clave:  <b> $clave </b><br><br> 
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
		$yourEmail   = "contacto@esavisos.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);
		
			//=========================================== REedireccion a otra pagina  =====================================
			//Los datos se han actualizado correctamente.';		
			$data = array("exito" => '1');
			die(json_encode($data));									
			//desconectar();
			mysql_close();	//cerrar la conexion a la bd
?>