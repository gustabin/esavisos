<?php 
session_start();
include "tools/corelib.php";
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
masfuerte {
	color: #000;
}
masfuerte {
	color: #000;
}
.masfuerte {
	color: #000;
}
-->
    </style>
    
    <section id="content1" class="section">
      <div class="container">
        <div class="row margin-60">
          <div class="col-sm-12">
            <h3><?php echo $_SESSION['condicion']; ?></h3>            
            <p class="lead">Que debes saber</p>
            <p> <span class="masfuerte">Cada anuncio que recibimos es revisado por nuestros analista a fin de verificar que cumplan con las regulaciones contempladas en esta materia. Si todo esta bien no tienes de que preocuparte, tu anuncio saldrá publicado en la(s) fecha(s) que indicastes. En caso contrario te notificaremos la cancelación de tu publicación via correo electrónico y te devolveremos tu dinero electronicamente.</span></p>
            <p><span class="masfuerte">Puedes venir a nuestra receptoria ubicada en Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana, Maracay, Edo. Aragua, de Lunes a Viernes en horario de oficina a retirar tu factura.</span></p>
            <p><span class="masfuerte">Gracias por preferirnos.</span></p>
          </div>
        </div>
        
        
      </div>
    </section>
    
   
    
   
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>