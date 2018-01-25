<?php
include "lib/corelib.php";
// conector de BD 
require_once('tools/mypathdb.php');
ob_start();
$fechaVenta = $_GET ['fechaVenta'];

?>
<style type="text/css">
<!--
.style2 {color: #000000}
.style3 {font-size: 18px}
-->
 table.page_footer {width: 100%; border: none; background-color: LightBlue; border-top: solid 1mm SteelBlue; padding: 2mm}
    table.page_header {width: 100%; border: none; background-color: LightBlue; border-bottom: solid 1mm SteelBlue; padding: 2mm }
.historia {	font-size: 9px;
}
</style>

<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm">
    <page_header>
        <table class="page_header">
            <tr>
                <td style="width: 33%; text-align: left;">esavisos, minianuncios online el siglo. 
                    
                </td>
                <td style="width: 34%; text-align: center">&nbsp;
                    
                </td>
                <td style="width: 33%; text-align: right">&nbsp;
                    
                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
<table class="page_footer">
            <tr>
                <td style="width: 33%; text-align: left;">
                    GAS &copy; 2015 Ver 1.0
                </td>
                <td style="width: 34%; text-align: center">
                    pagina [[page_cu]]/[[page_nb]]
                </td>
                <td style="width: 33%; text-align: right">
                    Sistemas</td>
            </tr>
        </table>
    </page_footer>
    <p>&nbsp;</p>
<table style="border:0px solid gray">
  <thead>
    <tr>
    <?php $fechaNueva=date("d-m-Y",strtotime($fechaVenta)); // cambiar el formato de la fecha ?>
      <th><h3>Minianuncios vendidos el <?php echo $fechaNueva?></h3></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <?php
	
	$query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fechaVenta'");
	$resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$userID = $data_av['av_userID'];
		$dias = $data_av['av_dias'];
		$fecha = $data_av['av_fecha'];
		$textoAviso = $data_av['av_textoAviso'];
		$seccion = $data_av['av_seccion'];
		$subtotal = $data_av['av_subtotal'];
		$iva = $data_av['av_iva'];
		$total = $data_av['av_total'];	  
		$granTotal = $granTotal + $total;
			
			$queryUsuario = mysql_query("SELECT * FROM tbl_usuarios WHERE us_id = $userID"); 
			$dataUsuario = mysql_fetch_array($queryUsuario);	
			$email = $dataUsuario['us_email']; 
			$nombre = $dataUsuario['us_nombre']; 
			$apellido = $dataUsuario['us_apellido']; 
			$empresa = $dataUsuario['us_empresa']; 
			$cedulaRif = $dataUsuario['us_cedulaRif']; 
			$direccion = $dataUsuario['us_direccion']; 
	    ?>
        
    <tr>
      <td><span class="historia"><?php echo $textoAviso;?></span></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Secci&oacute;n: </span><?php echo $seccion;?></td>
    </tr>
    <tr>
      <td><span class="historia">Fecha: <?php echo $fecha;?></span></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Dias: </span><?php echo $dias;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Subtotal: </span><?php echo $subtotal;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">IVA: </span><?php echo $iva;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Total: </span><?php echo $total;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Correo: </span><?php echo $email;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Nombre: </span><?php echo $nombre ." ". $apellido ." ". $empresa;?></td>
    </tr>
     <tr>
      <td><span class="historia" style="text-align: center">Empresa: </span><?php echo $empresa;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Cedula / Rif: </span><?php echo $cedulaRif;?></td>
    </tr>
    <tr>
      <td><span class="historia" style="text-align: center">Direccion: </span><?php echo $direccion;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    

     <?php } ?>
     <tr>
      <td><span class="header" style="text-align: center">Total vendido: </span><?php echo $granTotal;?></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</page>

<?php
$content = ob_get_clean();
ob_end_clean();
require_once('lib/html2pdf/html2pdf.class.php');
try {
    $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0, 0, 0, 0));
    $html2pdf->pdf->SetDisplayMode('real');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('Comprobante_PDF.pdf');
}
catch (HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>