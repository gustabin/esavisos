<?php 
session_start();
include "tools/corelib.php";
$_SESSION['valor'] = 8; //Activa la opcion del menu actual
include "header.php";
//include "menuSignin.php"; 
?>
   <script language="JavaScript" type="text/JavaScript">

	var fecha= <?php if (!empty($_SESSION['fecha'])) 
	{ echo "1";
	} else { 
	echo "0";
	}?>;

    	//Metodo para cargar el formulario 
		$("body").on('submit', '#formLogin', function(event) 
		{
			event.preventDefault() 
			if ($('#formLogin').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "login_Procesar.php",
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
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							if (fecha==0) {
								window.location.href='avisoCrear.php';
							} else {
							    window.location.href='pagar.php';
							}							
						}	
					}
				});
			}
		});

	    
</script>
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
.container .row .col-md-6 .push-top {
	color: #000;
}
.container .row .col-md-6 p {
	color: #000;
}
.container .row .col-md-6 .short strong {
	color: #000;
}
.container .row .col-sm-12.text-center h3 {
	color: #000;
}
.titulo {
	color: #000;
}
.container .row.margin-40 .col-sm-6.col-sm-offset-3.signup br {
	color: #000;
}
.letrabonita {
	color: #000;
}
-->
    </style>
    
    <!--Content-->
<section id="signup">
<div class="container">
        <div class="row margin-40">
            <div class="col-sm-6 col-sm-offset-3 signup">
                <h2 class="titulo"> Inicio de sesión</h2><br />
                  <h3 class="short"><strong>Completa lo siguiente:</strong> </h3>
                    <form class="form-vertical" id="formLogin">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Correo electrónico *</label>											
                                    <input type="email" value="" maxlength="100" class="form-control input-lg required email tdtextarea" name="Email" id="Email" placeholder="Correo electrónico">
                                </div>
                                <div class="col-md-6">
                                    <label>Clave *</label>
                                    <input type="password" value="" maxlength="100" class="form-control input-lg required tdtextarea" name="Password" id="Password" placeholder="Introduzca su clave">
                                </div>
                                <div class="col-md-6">                                    
                                    <p class="log-in-info"><span class="letrabonita">Olvidastes tu clave?</span> <a href="recuperar.php" id="headerSignIn">Recuperala</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
                            </div>
                        </div>
                    </form>
                    <p class="log-in-info"><span class="letrabonita">Aun no te has registrado?</span> <a href="signup.php" id="headerSignIn">Registrate!</a></p>
                    <div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
                  <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Accesando a su cuenta</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none" id="error1">
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir su nombre</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none" id="error2">	
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir su correo</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none" id="error3">	
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un titulo</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none" id="error4">	
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un mensaje</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none" id="error5">	
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <strong>MENSAJE: </strong> <span class="textmensaje">Correo o clave incorrecta</span>
                    </div>
			</div>						
		</div><!--End class="row margin-40"-->
    </div><!--End container-->
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