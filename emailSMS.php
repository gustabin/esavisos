<?php

		// ========================================envio de correo notificandome que un usuario se anuncio ===================
$nombre= "gustavo";
$varnumorigen="gustabin@yahoo.com";
$mensaje="hola que tal esta es una prueba de envio de mensaje SMS";
$varnumdestino="[SMS]+584243755128";
$empresa="correo.movistar.net";

$titulo = "sms web"; // titulo que aparecerá en el sms del destinatario
$headers = "From: " . $nombre;
$headers .= "<" . $varnumorigen . ">\\r\\n"; // e-mail del remitente (esto es 100% obligatorio)
$headers .= "Reply-To: " . $varnumorigen; // esta campo no es obligatorio, pero queda bien :)
$mensaje = $mensaje; // esta variable contiene el mensaje que enviamos, captado desde el formulario
$destino = $varnumdestino.$empresa; // concateno el numero de celular con la empresa

mail($destino,$titulo,$mensaje,$headers); // enviamos el mail/sms !
mail("584243755128@movistar.com.ve", "", "Llegaré 6 minutos tarde", "From: gustabin@yahoo.com \r\n"); 

echo "sms enviado!";
?>	
