<?php 
session_start(); 
include "tools/corelib.php";
$_SESSION['valor'] = 9; //Activa la opcion del menu actual
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
    $("body").on('submit', '#registrarUsuario', function(event) {
	event.preventDefault()
	if ($('#registrarUsuario').valid()) {
	    $.ajax({
		type: "POST",
		url: "signup_Procesar.php",
		dataType: "json",
		data: $(this).serialize(),
		success: function(respuesta) {
		    if (respuesta.error == 1) { //nunca ocurre
			  $('#error1').show();
			setTimeout(function() {
			  $('#error1').hide();
			}, 3000);
		    }
			  if (respuesta.error == 2) {
			  $('#error2').show();
			setTimeout(function() {
			  $('#error2').hide();
			}, 3000);
		    }
		    
			
			  if (respuesta.exito == 1) {
			  $('#mensaje').show();
			  setTimeout(function() {
			  $('#mensaje').hide();
			}, 3000);
			  window.location.href='registroExitoso.php';
		    }		  
			
		    
		}
	    });
	}
	});
	    
</script>
  <!-- .................................... $breadcrumb .................................... -->
  <style type="text/css">
<!--
.titulo {
	color: #000;
}
.section-content.section-contact.section-color-graylighter .container .row .span8 h4 {
	color: #000;
}
.section-content.section-contact.section-color-graylighter .container .row .span6 h4 {
	color: #000;
}
.letrabonita {
	color: #000;
}
-->
  </style>
  
  <section class="section-breadcrumb section-color-graylighter">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.php">Inicio</a><span class="divider">/</span></li>
        <li class="active">Registrar</li>
      </ul>
    </div>
  </section>
  <!-- .................................... $Contact .................................... -->
  
    <div class="container" style="margin-top:10px">
      <h2 class="section-title">
        <span class="titulo">Registrar</span> <small>usuario</small>
      </h2>
  </div>
  
  
  
  
  <!-- .................................... $Contact .................................... -->
  <section class="section-content section-contact section-color-graylighter">
    <div class="container">
      <div class="row">
        <div class="span6">
          <h4>Minianuncios clasificados el siglo Online.</h4>
          <p>
          <h5>Publica desde tu teléfono inteligente, tablet, laptop o Pc</h5>
		  <address>
            Estamos orgullosos de poder servirte...
          </address>	
          <p class="log-in-info"><span class="letrabonita">Ya tienes una cuenta?</span> <a href="login.php" id="headerSignIn">Iniciar sesión!</a></p>	  
        </div>
        
        <div class="span6">
          <h4>Por favor completa los siguientes datos</h4>
          <form class="form-vertical" id="registrarUsuario">
			<div class="control-group">
              <input class="span4 required tdtextarea" id="Nombre" name="Nombre" placeholder="Nombre" type="text" maxlength="40">
              <input class="span4 required tdtextarea" id="Apellido" name="Apellido" placeholder="Apellido" type="text" maxlength="40">
              <input class="span4 required tdtextarea" id="CedulaRif" name="CedulaRif" placeholder="Cédula o RIF" type="text" maxlength="10">
            </div>
            <div class="control-group">
              <input class="span4 required email tdtextarea" id="Correo" name="Correo" placeholder="Correo electrónico" type="text" maxlength="50">
              <input class="span4 required tdtextarea" minlength="6" id="Clave" name="Clave" placeholder="Clave" type="password" maxlength="20">
            </div>
            <div class="control-group">
              <input class="span4 tdtextarea" id="Empresa" name="Empresa" placeholder="Empresa (Opcional)" type="text" maxlength="50">
              <input class="span4 required tdtextarea" id="Direccion" name="Direccion" placeholder="Dirección" type="text" maxlength="100">
            </div>
			
            <div class="control-group">         
            <button class="btn btn-primary" type="submit">Enviar</button>
			<button class="btn btn-default" type="reset">Cancelar</button>
			</div>
          </form>
          
			<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error1">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">La clave debe ser mayor de 6 caracteres</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error2">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">El usuario ya está registrado</span>
			 </div>
        </div>
        
      </div>
      
    </div>
    
  </section>
  <section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>publica tus <strong>avisos</strong> en el siglo en  todas <strong>partes;</strong> buscanos en la red! <a href="secciones.php" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">publica ya!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
						</div>
					</div>
				</div>
    </section>
  <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>