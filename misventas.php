<?php 
session_start();
include "tools/corelib.php";
// conector de BD 
require_once('tools/mypathdb.php');
$_SESSION['valor'] = 7; //Activa la opcion del menu actual
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
  
<script type="text/javascript" language="javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="js/si.files.js"></script>
<script src="js/jquery.textareaCounter.plugin.js" type="text/javascript"></script>
<script src="js/jquery-ui.multidatespicker.js" type="text/javascript"></script>   
  <script language="JavaScript" type="text/JavaScript">
	$(document).ready(function() {
							    //$('#fechaVenta').datepicker('getDate'));
                        $("#fechaVenta").datepicker({
                            changeYear: true,
                            minDate: new Date(1900, 1 - 1, 1),
                            //maxDate: '-18Y',
                            dateFormat: 'yy-mm-dd',
                            defaultDate: new Date(),
                            changeMonth: true,
                            changeYear: true,
                            //yearRange: '-110:-18'
                        });					
						
						//MASCARA EN EL INPUT
                        $('#titulo').html("Resumen de Ventas");
						})
							

    //FUNCIÓN ASIGNAR VALOR A ICONOS DEL DETALLE DE LA HISTORIA
	function ValorIconos(id) {
        $('#ErrorBoton').hide();
        $("#examinar").attr("onclick", "Examinar(" + id + ");");
    }
	
	//FUNCIÓN ERROR BOTON
    function Error() {
        $('#ErrorBoton').show();	 
	}
//FUNCIÓN PARA MODIFICAR
    function Examinar(id) {
		window.location.href='ventaExaminar.php?id=' + id;
    }
</script>
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
<script type="text/javascript">

    //Metodo para cargar los datos personales
    $("body").on('submit', '#formVenta', function(event) {
		event.preventDefault()
		if ($('#formVenta').valid()) {
			$.ajax({
				type: "POST",
				url: "ventaProcesar.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(respuesta) {
					if (respuesta.error == 1) {
						$('#error1').show();
						setTimeout(function() {
						$('#error1').hide();
						}, 2000);
					}
					
					if (respuesta.exito == 1) {
						$('#exito1').show();
						setTimeout(function() {
						$('#exito1').hide();
						window.location.href='ventas.php'; 
					  }, 1000);
					}
					
				}
			});
		}
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
        <span class="resaltado">Minianuncios</span> <small>Resumen de Ventas</small>
      </h2>
    </div>
  
  <!-- .................................... $Contenido .................................... -->
  <section class="section-content section-contact section-color-graylighter">
            <div id="sresults" class="col-md-12">
   			<table id="sTable" class="tablesorter table table-bordered table-hover" style="border:1px solid #ECF0F1">
      			<thead>
        		<tr>
                    <td colspan="9" style="text-align: right">
                        <span class="span_required"id="ErrorBoton" style="display: none; font-size: 15px; float: left">
                            Por favor seleccione el minianuncio que desea examinar
                        </span>
                        <span style="margin-right: 10px">                            
                            <i class="icon-large icon-edit" onclick="Error();" id="examinar" style="cursor: pointer" title="Examinar"></i>
                        </span>
                    </td>
                </tr>
                <tr>                    
                    <th width="35%" class="header" style="text-align: center">Minianuncio</th>
                    <th width="5%" class="header" style="text-align: center">Sección</th>
                    <th width="5%" class="header" style="text-align: center">Dias</th>
					<th width="15%" class="header" style="text-align: center">Fecha</th>
                    <th width="10%" class="header" style="text-align: center">Subtotal</th>
                    <th width="10%" class="header" style="text-align: center">IVA</th>
                    <th width="10%" class="header" style="text-align: center">Total</th>
                    <th width="10%" class="header" style="text-align: center">Seleccionar</th>
                </tr>
            </thead>
            <tbody id="contenido"> 
<?php
		//================================================Recuperar registros tabla AVISOS y DEL USUARIO==================================================	
		
		if ((!empty($_SESSION['userID']))) {
			$resultadoUsuarios=mysql_query($queryUsuario,$dbConn);
			while($data_us=mysql_fetch_array($resultadoUsuarios))
			{
				$userID = $data_us['us_id'];
				//============================================Recuperar registros tabla usuarios==================================================
				$queryAvisos = ("SELECT * FROM tbl_avisos WHERE av_userID = '$userID'");			
			//$query = ("SELECT * FROM tbl_avisos WHERE av_userID= '$userID' AND av_fechaVenta= '$fechaVenta'");		
			$resultado=mysql_query($queryAvisos,$dbConn);
			while($data_av=mysql_fetch_array($resultado))
			{
				$dias = $data_av['av_dias'];
				$fecha = $data_av['av_fecha'];
				$textoAviso = $data_av['av_textoAviso'];
				$seccion = $data_av['av_seccion'];
				$subtotal = $data_av['av_subtotal'];
				$iva = $data_av['av_iva'];
				$total = $data_av['av_total'];
				?>
				  <tr>
					<td><?php echo $textoAviso;?></td>
					<td><?php echo $seccion;?></td>
					<td><?php echo $dias;?></td>
					<td><?php echo $fecha;?></td>
					<td><?php echo $subtotal;?></td>
					<td><?php echo $iva;?></td>
					<td><?php echo $total; ?></td>
					<td style="text-align: center">
					  <input type="radio" name="verAnunciante" id="verAnunciante" value="<?php echo $data_av['av_userID'] ?>" onclick="ValorIconos(this.value)">
					</td>
				  </tr>
				<?php 
			}
		}// fin del bucle de instrucciones
		}
		
		
		
	//mysql_free_result($resultado); // Liberamos los registros
?>
            </tbody>
          </table>
           <!-- pager -->
    <div id="pager" class="pager">
      <form>
        <input class="pagedisplay" readonly type="text">
        <button type="button" class="btn-main first"><i class="icon-fast-backward"></i></button>
        <button type="button" class="btn-main prev"><i class="icon-backward"></i></button>
        <button type="button" class="btn-main next"><i class="icon-forward"></i></button>
        <button type="button" class="btn-main last"><i class="icon-fast-forward"></i></button>

        <select class="styled-select pagesize" style="height:30px; width:auto">
          <option selected="selected" value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="50">50</option>
        </select>
      </form>
    </div>
    </div>
    </div>
</section>    
<!-- .................................... $footer .................................... -->
<?php include "footer.php"; ?>