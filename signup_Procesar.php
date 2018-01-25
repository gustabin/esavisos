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
		$username = $_POST ['Correo'];
		$nombre = $_POST ['Nombre'];
		$apellido = $_POST ['Apellido'];
		$cedulaRif= $_POST['CedulaRif'];
		$empresa= $_POST['Empresa'];
		$direccion= $_POST['Direccion'];
		
		$status = 1;//"1 Activo, 2 Inactivo";
		$tipo = 1;//"1 Usuario, 2 Vendedor, 3 Administrador";

			// ===============================================Grabar los datos ===============================================
			// ===============================================Buscar los datos en la tabla=====================================	
			
	if(empty($_SESSION['userID']))
		{
			// ===============================================Insertar los datos en la tabla=====================================
			$query_insertarUsuario = mysql_query("INSERT INTO tbl_usuarios (us_email, us_clave, us_status, us_fecha, us_tipo, us_nombre, us_apellido, us_cedulaRif, us_empresa, us_direccion) VALUES ('$email', '$clave', '$status', NOW(), $tipo, '$nombre', '$apellido', '$cedulaRif', '$empresa', '$direccion')");
			if($query_insertarUsuario == false) 
			{
				$data=array("error" => '2');
				die(json_encode($data));
			}
			
			$user_id = mysql_insert_id();
			$_SESSION['userID']=$user_id ;			
		} else {
			header("Location: logout.php");
		}
			
			// =====================grabar ID en variable de session =====================
			
			$_SESSION['email'] = $email;
			$_SESSION['clave'] = $clave;
			$_SESSION['nombre'] = $nombre;
			$_SESSION['apellido'] = $apellido;
			$_SESSION['username']= $username;
			$_SESSION['status']= $status;
			$_SESSION['tipo'] = $tipo;
			$_SESSION['empresa'] = $empresa;
			$_SESSION['cedulaRif'] = $cedulaRif;
			$_SESSION['direccion'] = $direccion;

		
			

		// ========================================envio de correo notificandome que un usuario se suscribio ===================
		$destino ="asistentetumacaed@gmail.com";
		$asunto = "Contacto Web esavisos";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un usuario se ha registrado en la Web esavisos</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Clave: </b>*******<br>
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
		$asunto = "Bienvenido a esavisos, la web de avisos clasificados - el siglo";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Anunciante - el siglo te da la Bienvenida!</h2><br>
        Hola <b>$nombre $apellido</b>,<br>
        A través de nuestro website podrás publicar tus miniavisos clasificados en el diario el siglo <br>
		al instante y de manera comoda!<br>		
        También podrás pagar con tu tarjeta de crédito de manera confiable.<br><br>
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
			//Los datos se han insertado correctamente.';		
			$data = array("exito" => '1');
			die(json_encode($data));									
			//desconectar();
			mysql_close();	//cerrar la conexion a la bd
?>