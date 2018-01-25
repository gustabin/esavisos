<?php // enviar archivo txt para colocarlo en H:\Janos
date_default_timezone_set('America/Caracas');
function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
    $file = $path.$filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
    if (mail($mailto, $subject, "", $header)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
    }
}

$fecha_actual = date("Ymd");
$archivo_txt= "Anuncios".$fecha_actual.".txt";
$my_file = $archivo_txt; // puede ser cualquier formato
//$my_path = $_SERVER['DOCUMENT_ROOT']."/ruta_a_tu_archivo/";
//$my_path = $_SERVER['DOCUMENT_ROOT']."/";
$my_path = "/home/anuncios/public_html/";
$my_name = "Gustavo Arias";
$my_mail = "contacto@esavisos.com";
$my_replyto = "contacto@esavisos.com";
$my_subject = "Adjunto archivo TXT para H:\janos";
$my_message = "Descargalo y copialo en H:\janos";
mail_attachment($my_file, $my_path, "asistentetumacaed@gmail.com", $my_mail, $my_name, $my_replyto, $my_subject, $my_message);
?>