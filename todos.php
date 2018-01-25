<?php 
session_start();
include "tools/corelib.php";
// conector de BD 
require_once('tools/mypathdb.php');
$_SESSION['valor'] = 1; //Activa la opcion del menu actual
include "header.php";
//include "menuSignin.php"; 
?>
    <!--Content-->
    <style type="text/css">
<!--
#content1 .container .row .col-sm-12 h3 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-8 h4 {
	color: #000;
}
.subtitulo {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 h4 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 p {
	color: #000;
}
.resaltado {
	color: #333;
}
-->
    </style>
    
<script type="text/javascript" language="javascript" src="<?php echo INCLUDES ?>js/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo INCLUDES ?>js/si.files.js"></script>

<script type='text/javascript'>                             // tablesorter
    $(document).ready(function() {
        $("#sTable").tablesorter({
            headers: {
                3: {   
                    sorter: false
                }
            }
        });
    });
</script>
<script type = "text/javascript">                            // tablesorter pagination
$(document).ready(function() {
    $('#sTable').tablesorter().tablesorterPager({container: $("#pager")}); 
}); 
</script>

  <!-- .................................... $breadcrumb .................................... -->
  <section class="section-breadcrumb section-color-graylighter">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#"><span id="titulo"></span></a></li>
      </ul>
    </div>
  </section>
  <!-- .................................... $Titulo .................................... -->
  
    <div class="container" style="margin-top:10px">
      <h2 class="section-title">
        <span class="resaltado">Minianuncios</span> <small>Datos del Anunciante</small>
      </h2>
    </div>
  
  <!-- .................................... $Contenido .................................... -->
  <section class="section-content section-contact section-color-graylighter">
    <div class="container">
            <div id="sresults" class="col-md-12">
   			<table id="sTable" class="tablesorter table table-bordered table-hover" style="border:1px solid #ECF0F1">
      			<thead>
                <tr>
                    <td colspan="9" style="text-align: right">
                        
                        
                    </td>
                </tr>
                <tr>                    
                    <th width="30%" class="header" style="text-align: center">Nombre</th>
                    <th width="20%" class="header" style="text-align: center">Empresa</th>
					<th width="10%" class="header" style="text-align: center">Rif</th>
                    <th width="30%" class="header" style="text-align: center">Dirección</th>
                    <th width="10%" class="header" style="text-align: center">email</th>
                </tr>
            </thead>
            <tbody id="contenido"> 
<?php
		//================================================Recuperar registros tabla usuarios==================================================
		
		$query = ("SELECT * FROM tbl_usuarios");
		$resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$nombre = $data_av['us_nombre'];
		$apellido = $data_av['us_apellido'];
		$empresa = $data_av['us_empresa'];
		$cedulaRif = $data_av['us_cedulaRif'];
		$direccion = $data_av['us_direccion'];
		$email = $data_av['us_email'];
	    ?>
        		<tr>
            		<td><?php echo $nombre . " ".  $apellido;?></td>
                    <td><?php echo $empresa;?></td>
                    <td><?php echo $cedulaRif;?></td>
                    <td><?php echo $direccion;?></td>
                    <td><?php echo $email;?></td>                	
                </tr>
        <?php } // fin del bucle de instrucciones

mysql_free_result($resultado); // Liberamos los registros
?>
            </tbody>
          </table>
   
    </div>
    </div>
</section>
  <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>