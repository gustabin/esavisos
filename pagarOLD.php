<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
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
		$("body").on('submit', '#formPagar', function(event) 
		{
			event.preventDefault()
			if ($('#formPagar').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "pagar_Procesar.php",
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
<?php    
							$cedula = "9685258";                
							$input = "1234567";//factura
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
	<div class="container">
		<div class="row">
			<div class="col-md-12">						
				<div class="col-sm-6; align:'center';">
					<div class="featured-box featured-box-secundary default info-content">
						<div class="box-content">
							<h4>Pagar publicación de aviso</h4>
							
							<form class="form-vertical" id="formPagar">
					<div class="row">
						<div class="form-group">
						  <div class="col-md-12">
							    <p><h4>Tipo de Tarjeta:
									 &nbsp;
							      <input type="radio" name="tipoTarjeta" value="1"><img src = "<?php echo INCLUDES ?>tdcvisa.png" style="width: 30px; height: 20px;">
							         &nbsp;
							      <input type="radio" name="tipoTarjeta" value="2"><img src = "<?php echo INCLUDES ?>tdcmaster.png" style="width: 30px; height: 20px;">
  									 &nbsp;
							      <input type="radio" name="tipoTarjeta" value="3"><img src = "<?php echo INCLUDES ?>tddmaestro.png" style="width: 30px; height: 20px;">
  									</h4>
					        </p>
							</div>
							<div class="col-md-3">
								<input class="form-control input-lg required" id="plan" name="plan" placeholder="<?php echo $plan?>" type="hidden" readonly="readonly">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<input class="form-control input-lg required" id="CardNumber" name="CardNumber" placeholder="Número de Tarjeta" type="text">
							</div>
							<div class="col-md-6">
								<input class="form-control input-lg required" id="dtExpiration" name="dtExpiration" placeholder="Fecha de expiración" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input class="form-control input-lg required" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre del tarjetahabiente" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<input class="form-control input-lg required" id="cedula" name="cedula" placeholder="Cédula" type="text">
							</div>
							<div class="col-md-6">
							      <input class="form-control input-lg" id="input" name="input" placeholder="Monto: <?php echo $factura?>" type="text" readonly="readonly">								
							</div>
						</div>
					</div>


							<div class="col-md-12">
								<input type="submit" value="Pagar" class="btn btn-primary pull-right push-bottom" data-loading-text="Procesando...">
							</div>

					
				</form>							
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error1">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">El password debe ser mayor de 6 caracteres</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error2">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Este usuario ya está registrado</span>
							</div>
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error3">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Las claves no son iguales</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error4">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Las claves no pueden estar en blanco</span>
							</div>
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error5">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un correo electrónico</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error6">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Ya existe una cuenta con ese correo electrónico</span>
							</div>
						</div>
                        <p></p>
                            <p></p>
					</div>
				</div>							
								
												
			</div>
		</div>
	</div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>