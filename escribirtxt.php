<?php // escribir archivo txt para entregarselo a JANOS

session_start(); 

$fecha_actual = date("Ymd");

$archivo_txt= "Anuncios".$fecha_actual.".txt";

//$file = fopen($archivo_txt, "w");

$file = fopen($archivo_txt, "a");



//ID,Seccion,Texto,Fecha 

$anuncio=$_SESSION['userID']."|".$_SESSION['seccion']."|".$_SESSION['textoAviso']."|".$_SESSION['fecha']."||";

fwrite($file, $anuncio . PHP_EOL);

fclose($file);



//header("Location: listo.php");



?>