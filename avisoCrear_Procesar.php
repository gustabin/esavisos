<?php
session_start(); 
error_reporting(0);
require_once('tools/mypathdb.php');
$_SESSION['textoAviso'] = $_POST ['textoAviso'];
$tipo_fecha = $_POST ['tipo_fecha'];
$desde = $_POST ['desde'];
//$_SESSION['desde'] = $desde;
$hasta = $_POST ['hasta'];
//$_SESSION['hasta'] = $hasta;
$fecha = $_POST ['ValorFecha'];
//$_SESSION['fecha'] = $fecha;
$dias = $_POST ['NumDias'];
$_SESSION['dias'] = $dias;
$_SESSION['palabras'] = $_POST ['palabras'];
$_SESSION['adicionales'] = $_POST ['adicionales'];
$_SESSION['subtotal'] = $_POST ['subtotal'];
$_SESSION['iva'] = $_POST ['iva'];
$_SESSION['total'] = $_POST ['total'];
$_SESSION['seccion'] = $_POST ['seccion'];
$_SESSION['aceptar'] = $_POST['chk_aceptar'];

			if ($_SESSION['total']<$_SESSION['subtotal'])  {
				$data = array("error" => '2');
				die(json_encode($data));
			}
			if ($_SESSION['aceptar']<>1)  {
				$data = array("error" => '1');
				die(json_encode($data));
			}
			
			if ($_SESSION['subtotal']<3160.71)  {
				$data = array("error" => '3');
				die(json_encode($data));
			}
			
			if ($_SESSION['dias']<3)  {
				$data = array("error" => '3');
				die(json_encode($data));
			}
			
			if ($tipo_fecha==0)  {
				$data = array("error" => '4');
				die(json_encode($data));
			}
			if ($tipo_fecha==1) //rango fecha
    		{
				$fecha=date("d/m/Y", strtotime("$desde"));
				for ($i = 1; $i < $dias; $i++) {
					$fecha= $fecha . "," . date("d/m/Y", strtotime("$desde +$i day"));
				}
				$_SESSION['fecha'] = $fecha;
				$data=array("exito" => '1'); 
				die(json_encode($data));	
			}
			if ($tipo_fecha==2) // fecha especifica
    		{
				$_SESSION['fecha'] = $_POST ['ValorFecha'];
				$data=array("exito" => '1'); 
				die(json_encode($data));	
			}
?>