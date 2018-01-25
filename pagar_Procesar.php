<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
include "menuSignin.php"; 
?>
   <script language="JavaScript" type="text/JavaScript">
	$(document).ready(function() {
                        $("#fecha_nac").datepicker({
                            changeYear: true,
                            minDate: new Date(1900, 1 - 1, 1),
                            maxDate: '-18Y',
                            dateFormat: 'yy-mm-dd',
                            defaultDate: new Date(1970, 1 - 1, 1),
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-110:-18'
                        });					
						//MASCARA EN EL INPUT
                        $(".tlf").mask("(0999) 999-99-99");	
						})

    	//Metodo para cargar el formulario 
		$("body").on('submit', '#formRegistrar', function(event) 
		{
			event.preventDefault()
			if ($('#formRegistrar').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "registrar_Procesar.php",
					dataType: "json",
					data: $(this).serialize(),
					success: function(respuesta) 
					{
						if (respuesta.error == 1) 
						{ //nunca ocurre
							$('#error1').show();
							setTimeout(function() 
							{
								$('#error1').hide();
							}, 3000);
						}
						if (respuesta.error == 2) 
						{
							$('#error2').show();
							setTimeout(function() 
							{
								$('#error2').hide();
							}, 3000);
						}		
						if (respuesta.error == 3) 
						{
							$('#error3').show();
							setTimeout(function() 
							{
								$('#error3').hide();
							}, 3000);
						}	
						if (respuesta.error == 4) 
						{
							$('#error4').show();
							setTimeout(function() 
							{
								$('#error4').hide();
							}, 3000);
						}	
						if (respuesta.error == 5) 
						{
							$('#error5').show();
							setTimeout(function() 
							{
								$('#error5').hide();
							}, 3000);
						}	
						if (respuesta.error == 6) 
						{
							$('#error6').show();
							setTimeout(function() 
							{
								$('#error6').hide();
							}, 3000);
						}	
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							window.location.href='registrar_Listo.php';
						}	
					}
				});
			}
		});

	    
</script>
<div role="main" class="main"> 

	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Inicio</a></li>
						<li class="active">Registrar usuario</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">                            
					<h2>Suscribete ahora y disfruta de una semana GRATIS</h2>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-12">						
				<div class="col-sm-12">
					<div class="featured-box featured-box-secundary default info-content">
						<div class="box-content">
							<h4>Pagar suscripción</h4>
							<?php    
							$cedula = "9685258";                
							$input = "1234567";
							$nombreCompleto = "Felix G Arias S";
							$CardNumber = "6276091240123169";
							$dtExpiration = "000000";//MMAAAA
							$idCardType = 3; // 1 VISA, 2 MASTER, 3 DEBITO
							$plan = "1720";
							
                    $idInvoice       = str_pad($input, 15);
                    $idmerchant      = 860117472;
                    $IDCardHolder = str_pad($cedula, '9', '0', STR_PAD_LEFT);
                    $swTest       = 1;
                    $CardHolder   = str_pad($nombreCompleto, 50);
                    $Tarifa       = number_format($plan, 2, '', '');
                    $Amount       = str_pad($Tarifa, '15', '0', STR_PAD_LEFT);
                    $AccountType  = "00";
                    ?>
				<form name="Frm" id="Frm" action="" method="POST">                    
                    <input type="text" name="IDCardHolder" id="IDCardHolder" value="<?php echo $IDCardHolder; ?>"/>
                    <input type="hidden" name="idMerchant" id="idMerchant" value="<?php echo $idmerchant; ?>">
                    <input type="text" name="idInvoice" id="idInvoice" value="<?php echo $idInvoice; ?>">
                    <input type="text" name="Amount" id="Amount" value="<?php echo $Amount; ?>" style="color:#000000">
                    <input type="text" name="CardNumber" id="CardNumber" value="<?php echo $CardNumber; ?>">
                    <input type="text" name="CardHolder" id="CardHolder" value="<?php echo $CardHolder; ?>">
                    <input type="text" name="idCardType" id="idCardType" value="<?php echo $idCardType ?>" style="color:#000000">
                    <input type="text" name="swTest" id="swTest" value="<?php echo $swTest; ?>">
                    <input type="text" name="strPostURL" id="strPostURL" value="https://www.essuscripcion.com/view/verificar_datos.php">
                    <input type="text" name="strReturnURL" id="strReturnURL" value="https://www.essuscripcion.com/view/aprobar_compra.php?I=<?php echo base64_encode($Array_Compras[0]['id']); ?>&T=<?php echo base64_encode($IdTarjeta); ?>"> 
                    <input type="hidden" name="Hash" id="Hash" value="<?php echo sha1($idmerchant . $idInvoice . $Amount . $idCardType . $CardNumber . $dtExpiration . $AccountType . $CardHolder . $IDCardHolder . $swTest); ?>"style="color:#000000; width: 400px;">
					<input type="radio" name="id_tarifa" id="id_tarifa" value="<?php echo $Tarifa['id']; ?>" class="required id_tarifa"> <?php echo $Tarifa['descripcion']; ?>
					<div class="row clearfix" style="margin-top: 2%;" id="botone_agregar">
                            <div class="col-md-12 column ui-sortable">
                                <button type="submit" class="btn btn-primary btn-lg active">Pagar</button>  

                                <a data-toggle="modal" role="button" href="#modal" id="modal" class="btn btn-default" style="padding: 10px;">Eliminar</a>

                            </div>
                        </div><!--FIN DIV BOTONES--> 
                    <div class="span4 procesando" style="float: right; width: 475px; display: none">Procesando Tarjeta<br><img src="<?php echo INCLUDES ?>loading.gif" style="width: 60px; height: 60px;"></div>
                </form>
							
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error1">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">El password debe ser mayor de 6 caracteres</span>
							</div>
                            
						</div>
					</div>
				</div>							
								
													
			</div>
		</div>
	</div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>