<?php 
session_start();
date_default_timezone_set('America/Caracas');
//date_default_timezone_set('europe/spain');
include "nombreSeccion.php";
if (!empty($_GET ['seccion'])) 
	{
	$_SESSION['seccion']=$_GET ['seccion'];
	}
else 
	{
	  if (empty($_SESSION['seccion'])) 
	  	{
		  header("Location: secciones.php");
	  	}
	}


include "tools/corelib.php";

$_SESSION['valor'] = 1; //Activa la opcion del menu actual
include "header.php";

?>

<script src="js/jquery.textareaCounter.plugin.js" type="text/javascript"></script>
<script src="js/jquery-ui.multidatespicker.js" type="text/javascript"></script>      
<link href="bootstrap.css" rel="stylesheet">  
<script language="JavaScript" type="text/JavaScript">
var login= <?php if (!empty($_SESSION['userID'])) 
	{ echo "1";
	} else { 
	echo "0";
	}?>;

	$(document).ready(function() {			
				
				
				var today = new Date();
				var hours = today.getHours();
				var minutos = today.getMinutes();
				var segundos = today.getSeconds()
				var diadelasemana= today.getDay();
				var cerrado=false;
				var hora = hours+ ":" + minutos+ ":" + segundos;
				if (hora>="15:30:00") 
					{
					cerrado=true;
					}
				else 
					{
					cerrado=false;
					}									
				
				if (diadelasemana==6) {
					$('#fecha').multiDatesPicker({					
						minDate: new Date(new Date().getTime() + (3 * 24 * 3600 * 1000)),
						dateFormat: 'yy-mm-dd',
						maxPicks: 90,
						maxDate: 90,
						//addDisabledDates: [today.setDate(1), today.setDate(24),today.setDate(25),today.setDate(31),today.setDate(32)],
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});

					$("#desde").datepicker({
						//changeYear: true,
						minDate: new Date(new Date().getTime() + (3 * 24 * 3600 * 1000)),
						//maxDate: 60,
						dateFormat: 'yy-mm-dd',
						maxDate: 90,
						//changeMonth: true,
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});
					
					$("#hasta").datepicker({
					//changeYear: true,
					minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
					dateFormat: 'yy-mm-dd',	
					maxDate: 90,
					//changeMonth: true,
					onClose: function(selectedDate) {
						$("#desde").datepicker("option", "maxDate", selectedDate);
					}
					});						
				}// fin (diadelasemana==6)
				
				if (diadelasemana==0) {
					$('#fecha').multiDatesPicker({					
						minDate: new Date(new Date().getTime() + (2 * 24 * 3600 * 1000)),
						dateFormat: 'yy-mm-dd',
						maxPicks: 90,
						maxDate: 90,
						//addDisabledDates: [today.setDate(1), today.setDate(24),today.setDate(25),today.setDate(31),today.setDate(32)],
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});

					$("#desde").datepicker({
						//changeYear: true,
						minDate: new Date(new Date().getTime() + (2 * 24 * 3600 * 1000)),
						//maxDate: 60,
						dateFormat: 'yy-mm-dd',
						maxDate: 90,
						//changeMonth: true,
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});
					
					$("#hasta").datepicker({
					//changeYear: true,
					minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
					dateFormat: 'yy-mm-dd',	
					maxDate: 90,
					//changeMonth: true,
					onClose: function(selectedDate) {
						$("#desde").datepicker("option", "maxDate", selectedDate);
					}
					});	
				}// fin (diadelasemana==0)
				 

				if ((cerrado==false & diadelasemana!==0) & (cerrado==false & diadelasemana!==6)) {
					$('#fecha').multiDatesPicker({					
						minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
						dateFormat: 'yy-mm-dd',
						maxPicks: 90,
						maxDate: 90,
						//addDisabledDates: [today.setDate(1), today.setDate(24),today.setDate(25),today.setDate(31),today.setDate(32)],
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});

					$("#desde").datepicker({
						//changeYear: true,
						minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
						//maxDate: 60,
						dateFormat: 'yy-mm-dd',
						maxDate: 90,
						//changeMonth: true,
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});
					
					$("#hasta").datepicker({
					//changeYear: true,
					minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
					dateFormat: 'yy-mm-dd',	
					maxDate: 90,
					//changeMonth: true,
					onClose: function(selectedDate) {
						$("#desde").datepicker("option", "maxDate", selectedDate);
					}
					});	
				} // fin ((cerrado==false & diadelasemana!==0) & (cerrado==false & diadelasemana!==6)) 
				
				if ((cerrado==true & diadelasemana!==0) & (cerrado==true & diadelasemana!==6) & (cerrado==true & diadelasemana!==5)) {
					$('#fecha').multiDatesPicker({					
						minDate: new Date(new Date().getTime() + (2 * 24 * 3600 * 1000)),
						dateFormat: 'yy-mm-dd',
						maxPicks: 90,
						maxDate: 90,
						//addDisabledDates: [today.setDate(1), today.setDate(24),today.setDate(25),today.setDate(31),today.setDate(32)],
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});

					$("#desde").datepicker({
						//changeYear: true,
						minDate: new Date(new Date().getTime() + (2 * 24 * 3600 * 1000)),
						//maxDate: 60,
						dateFormat: 'yy-mm-dd',
						maxDate: 90,
						//changeMonth: true,
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});
					
					$("#hasta").datepicker({
					//changeYear: true,
					minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
					dateFormat: 'yy-mm-dd',	
					maxDate: 90,
					//changeMonth: true,
					onClose: function(selectedDate) {
						$("#desde").datepicker("option", "maxDate", selectedDate);
					}
					});	
				}// fin ((cerrado==true & diadelasemana!==0) & (cerrado==true & diadelasemana!==6))
				
				
				if ((cerrado==true & diadelasemana==5)) {
					$('#fecha').multiDatesPicker({					
						minDate: new Date(new Date().getTime() + (4 * 24 * 3600 * 1000)),
						dateFormat: 'yy-mm-dd',
						maxPicks: 90,
						maxDate: 90,
						//addDisabledDates: [today.setDate(1), today.setDate(24),today.setDate(25),today.setDate(31),today.setDate(32)],
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});

					$("#desde").datepicker({
						//changeYear: true,
						minDate: new Date(new Date().getTime() + (4 * 24 * 3600 * 1000)),
						//maxDate: 60,
						dateFormat: 'yy-mm-dd',
						maxDate: 90,
						//changeMonth: true,
						onClose: function(selectedDate) {
							var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));
							$("#hasta").datepicker("option", "minDate", selectedDate);
							$("#hasta").datepicker("option", "maxDate", maxDate);						
						}
					});
					
					$("#hasta").datepicker({
					//changeYear: true,
					minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
					dateFormat: 'yy-mm-dd',	
					maxDate: 90,
					//changeMonth: true,
					onClose: function(selectedDate) {
						$("#desde").datepicker("option", "maxDate", selectedDate);
					}
					});	
				}// fin ((cerrado==true & diadelasemana==5)
				
				
				}) // fin $(document).ready(function()
	
				function mostrar_fecha(valor) {
					if (valor == 1) {
						$('#rangofecha').toggle("fast");
						$('#fechaespecifica').hide();
						$('#desde,#hasta').val('');
					} else if (valor == 2) {
						$('#rangofecha').hide();
						$('#fecha').val('');
						$('#fechaespecifica').toggle("fast");
					} else {
						$('#desde,#hasta, #altField').val('');
						$('#rangofecha, #fechaespecifica').hide();
						$('#showData6').html("Debe elegir una fecha de publicación");
					}
				}
	
				var dias = 0; // se declara afuera para que sea variable global
				
				function numeroDeDias() {
					var start = $("#avisoCrear input[name='desde']").datepicker('getDate');
					var end = $("#avisoCrear input[name='hasta']").datepicker('getDate');
					
					if(!start || !end)
					return;
					// var dias = 0;
					if (start && end) {
					dias = Math.floor((end.getTime() - start.getTime()) / 86400000) + 1; 
					} 
					$("#showData7").html('<img src="includes/img/loading.gif" alt="Calculando..."/>');
					$('#showData7').show();
					setTimeout(function() {
						$('#showData7').hide();
						}, 2000);
					$('#showData6').html("Dias de publicación: " + dias);
					$('#NumDias').val(dias);
				}
				
				function numeroDeDiasEspecificos(valor) {
					dias=$("#fecha").get(0).multiDatesPicker.dates.picked.length;
					$("#showData7").html('<img src="includes/img/loading.gif" alt="Calculando..."/>');
					$('#showData7').show();
					setTimeout(function() {
						$('#showData7').hide();
						}, 2000);
					$('#showData6').html("Dias de publicación: " + dias);
					$('#NumDias').val(dias);
					$('#ValorFecha').val(valor);										
				}
				
				
                jQuery(document).ready(function($) {					
                    var options3 = {
                        'maxCharacterSize': 250,
                        'originalStyle': 'originalTextareaInfo',
                        'warningStyle': 'warningTextareaInfo',
                        'warningNumber': 40,
                        'displayFormat': ''
                    };
                    var palabra_maxima =15;
					var valor_aviso =1053.57;
					var valor_palabra_adicional =110.71;
						
                    $('#textoAviso').textareaCount(options3, function(data) {
                        $('#showData').html("Cantidad de palabras: " + data.words);
						$('#palabras').val(data.words);
						var palabrasAdicionales= data.words - palabra_maxima;
						$('#adicionales').val(palabrasAdicionales);
						if (palabrasAdicionales >= 1) {
							var montoAdicional;
							montoAdicional = palabrasAdicionales * valor_palabra_adicional;
						} else {
							var montoAdicional;
							montoAdicional = 0;
						}
						
						var sub_total;
						sub_total = (valor_aviso + montoAdicional);						
						
						if (dias != 0) {
							sub_total = (valor_aviso + montoAdicional)* dias;
							$('#subtotal').val(sub_total);
						}

                        $('#showData2').html("Palabras Adicionales: " + palabrasAdicionales );
						$('#showData3').html("Sub Total: " + sub_total.toFixed(2) + " Bs");
						var iva;
						iva = sub_total*0.12; 
						$('#iva').val(iva);

						$('#showData4').html("IVA 12%: " + iva.toFixed(2) + " Bs");
						var total;
						total = sub_total + iva; 
						total = total.toFixed(2);
						$('#total').val(total);
						$('#showData5').html("Total: " + total + " Bs");

                        $('#cant_palabra').val(data.words);
                        var cant = data.words;
                        //  console.log(cant);
                        if (cant > palabra_maxima) {
                            $('#showData2').addClass("letras_aviso");
							$('#showData2').show();
                        } else {
                            $('#showData2').removeClass("letras_aviso");
							$('#showData2').hide();
                        }
				
                    });


                    $.datepicker.regional['es'] =
                            {
                                closeText: 'Cerrar',
                                prevText: 'Previo',
                                nextText: 'PrÃ³ximo',
                                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                                    'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                monthStatus: 'Ver otro mes', yearStatus: 'Ver otro aÃ±o',
                                dayNames: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'SÃ¡bado'],
                                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'SÃ¡b'],
                                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                dateFormat: 'dd/mm/yy', firstDay: 0,
                                initStatus: 'Selecciona la fecha', isRTL: false};
                    $.datepicker.setDefaults($.datepicker.regional['es']);

               //Metodo para cargar el formulario 
    $("body").on('submit', '#avisoCrear', function(event) {
	event.preventDefault()
	if ($('#avisoCrear').valid()) {
	    $.ajax({
		type: "POST",
		url: "avisoCrear_Procesar.php",
		dataType: "json",
		data: $(this).serialize(),
		success: function(respuesta) {
		    if (respuesta.error == 1) { 
			  $('#error').show();
			setTimeout(function() {
			  $('#error').hide();
			}, 3000);
			 //window.location.href='error.php';
		    }
			if (respuesta.error == 2) { 
			  $('#error2').show();
			setTimeout(function() {
			  $('#error2').hide();
			}, 3000);
			// window.location.href='error.php';
		    }
			
			if (respuesta.error == 3) { 
			  $('#error3').show();
			setTimeout(function() {
			  $('#error3').hide();
			}, 3000);
			// window.location.href='error.php';
		    }
			
			if (respuesta.error == 4) { 
			  $('#error4').show();
			setTimeout(function() {
			  $('#error4').hide();
			}, 3000);
			// window.location.href='error.php';
		    }


			if (respuesta.exito == 1) {
			  $('#mensaje').show();
			  setTimeout(function() {
			  $('#mensaje').hide();
			}, 3000);
			  if (login==0) {
								window.location.href='publicar.php';
							} else {
							    window.location.href='pagar.php';
							}
		    }		  
				
		}
	    });
	}
	});
	});

        </script>
		<style>
            .charleft {
                width: 205px !important;
            }
			.letras_aviso{
			font-size: 14px;
			color:#CC181E !important;
			font-family: Arial, Helvetica, sans-serif;
			font-weight:bold;
			}
        </style>
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
-->
    
* {
margin: 0;
padding: 0;
}


/* base semi-transparente */
    .overlay{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index:1001;
opacity:.75;
        -moz-opacity: 0.75;
        filter: alpha(opacity=75);
    }

    /* estilo para la ventana modal */
    .modal {
        display: none;
        position: absolute;
        top: 25%;
        left: 50%;
        width: 100%;
        height: 50%;
        padding: 16px;
        background: #fff;
color: #333;
        z-index:1002;
        overflow: auto;
    }
    </style> - 

    <!--Content-->
    
    <section id="signup">
      <div class="container">
        <div class="row margin-40">
            <!--div class="col-sm-6 col-sm-offset-3 text-center signup"!-->
            <div class="col-sm-6 col-sm-offset-3 signup">
              <h3> Publicar clasificado </h3>
              <br />
              <b>Sección:</b> &nbsp; <?php mostrarTexto($_SESSION['seccion']); ?>
              <h4>Completa los siguientes datos</h4>
              <form id="avisoCrear" class="form-horizontal">
              <div class="control-group">
                	<p></p>
                    Tipo de Fecha 
                    <select class="input-medium required tdtextarea" name="tipo_fecha" id="tipo_fecha" onchange="mostrar_fecha(this.value);">
                        <option value="0">Seleccione</option>
                        <option value="1">Rango de Fecha</option>
                        <option value="2">Fecha Especifica</option>
                    </select>
                </div>
                    <p></p>
                 Fecha de Publicación
          		 <div class="row" id="rangofecha" style="display: none">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label required tdtextarea" for="desde">Desde <span class="requerido">*</span></label><br>
                            <input type="text" name="desde" id="desde" class="required input-xlarge" readonly="readonly" onchange="numeroDeDias(this.value)" />
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label required tdtextarea" for="hasta">Hasta <span class="requerido">*</span></label><br>
                            <input type="text" name="hasta" id="hasta" class="required input-xlarge" readonly="readonly" onchange="numeroDeDias(this.value)"/>
                        </div>
                    </div>
                </div>

                <div class="row" id="fechaespecifica" style="display: none">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label required tdtextarea" for="unaFecha">Fecha <span class="requerido">*</span></label><br>
                            <input type="text" name="fecha" id="fecha" class="required input-xlarge" readonly="readonly" onblur="numeroDeDiasEspecificos(this.value)"/>
                        </div>
                    </div>                    
                </div>
                <span class="add-on"><i class="fa fa-indent"></i></span>
                   <textarea class="form-control required tdtextarea" id="textoAviso" name="textoAviso" cols="70" rows="5" placeholder="Texto del clasificado"><?php echo $_SESSION['textoAviso'] ?></textarea>

<input name="chk_aceptar" type="checkbox" value="1" checked /> He leido y acepto las <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';"> condiciones generales</a> para publicar.
          	  
               <div id="fade" class="overlay" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
</div>
              <input name="NumDias" id="NumDias" type="hidden" value="" />
              <input name="ValorFecha" id="ValorFecha" type="hidden" value="" />
              <input name="palabras" id="palabras" type="hidden" value="" />
              <input name="adicionales" id="adicionales" type="hidden" value="" />
              <input name="subtotal" id="subtotal" type="hidden" value="" />
              <input name="iva" id="iva" type="hidden" value="" />
              <input name="total" id="total" type="hidden" value="" />
              <input name="seccion" id="seccion" type="hidden" value="<?php echo $_SESSION['seccion'] ?>" />
              
              
              
              <div class="row margin-60">
              <div id="light" class="modal">
    <p><h3> Condiciones generales</h3>
            <p class="lead">Revise su clasificado</p>
            <p>Al momento de crear su clasificado le agradecemos leer cuidadosamente: Texto, Sección y Fecha, ya que al pagar está aceptando todo lo impreso en el mismo.</p>
            <p class="lead">Reclamos</p>
            <p>Cualquier objeción sobre un aviso clasificado clasificado publicado incorrecto debe hacerse el 1er día de la publicación indicado en la factura, de lo contrario queda sin efecto cualquier tipo de reclamo.</p>
            <p>Cuando por problemas técnicos nos veamos imposibilitados de publicar su aviso, el cliente debe solicitar su nuevo día de publicación formalmente.</p>
            <p>NO ESTÁ PERMITIDO BAJO NINGÚN CONCEPTO: ANULACIÓN DE AVISOS, CAMBIOS DE FECHAS DE PUBLICACIÓN, CAMBIOS DE TEXTO Y/O CAMBIOS DE SECCIÓN.</p>
<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">cerrar</a>
</p>
    </div>
    </div>

            <div class="control-group">              	  
                  <div class="controls">
          	       <button type="submit" class="btn-main"><i class="fa fa-user"></i> Crear aviso</button>
          	      </div>
          	      <a class="small-message" href="signup.php"><small>Tienes cuenta con nosotros?</small></a>
          	  </div>
      
          	  </form>
              <div id="showData"></div>
                <div id="showData" style="color: #000000;"></div>
                <div id="showData2" style="color: #000000"></div>
                <div id="showData3" style="color: #000000; font-size: 14px;"></div>
                <div id="showData4" style="color: #000000; font-size: 14px;"></div>
                <div id="showData5" style="color: #000000; font-size: 18px;"></div>
                <div id="showData6" style="color: #000000; font-size: 18px;"></div>
                <div id="showData7" style="color: #000000; font-size: 18px; display: none;"></div>
	  	     <div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Los datos se registraron con exito</span>
			 </div>
			
             <div class="alert alert-success mensaje_form" style="display: none" id="error">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Debe aceptar las condiciones</span>
			 </div>
             <div class="alert alert-danger mensaje_form" style="display: none" id="error2">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Ha ocurrido un error revise su información</span>
			 </div>
             <div class="alert alert-danger mensaje_form" style="display: none" id="error3">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Debe publicar al menos tres (3) días</span>
			 </div>
             <div class="alert alert-danger mensaje_form" style="display: none" id="error4">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Debe seleccionar un a fecha</span>
			 </div>

          </div><!--End Col 6-->
        </div><!--End Row-->
      </div><!--End Container-->
    </section>        
    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>