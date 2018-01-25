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
      <h2 class="section-title">Activación</h2>
      <h2>Validar cuenta</h2>
  </div>
  
  
  
  
  <!-- .................................... $Contact .................................... -->
  <section class="section-content section-contact section-color-graylighter">
    <div class="container">
      <div class="row">
        <div class="span6">
          <h4><img class="pull-left" src="img/device.png" width="200" height="140" data-appear-animation="fadeInRightBig" /> </h4>
          <h4>Registro exitoso</h4>
          <p>Estimado lector, le hemos enviado un correo electrónico con un link de activación, debe hacerle click para poder comenzar a utilizar nuestro servicio.</p>
          <p>&nbsp;</p>
          <p>El equipo de esavisos.</p>	  
        </div>
      </div>
      
    </div>
    
  </section>
  <section class="call-to-action featured footer"></section>
  <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>