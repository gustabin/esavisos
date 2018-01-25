<?php 
session_start();
date_default_timezone_set('America/Caracas');
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
-->
    </style>
    
    <section id="content1" class="section">
      <div class="container">
      
      <div class="row">
          <div class="col-sm-12">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="img/900x90-1.jpg" class="img-responsive" alt="anuncios online" /></li>
                <li><img src="img/900x90-2.jpg" class="img-responsive" alt="avisos el siglo" /></li>
                <li><img src="img/900x90-3.jpg" class="img-responsive" alt="avisos online" /></li>
              </ul>
            </div>
          </div>
        </div>
      
      
        <div class="row">
          <div class="col-sm-12">
            <h3>Publica tu clasificado</h3>
          </div>
        </div>
        
        <div class="row margin-40">
          <div class="col-sm-8">
            <h4>Online</h4>
            <p class="subtitulo"> El siglo pone a tu disposición su plataforma web que te permite publicar tus avisos clasificados a través de internet. Puedes utilizar cualquier dispositivo pc, laptop,  tablet o teléfono inteligente.</p>
          </div>
        
          <div class="col-sm-4">
            <h4>Pago con seguridad</h4>
            <p>Aceptamos tu tarjeta de crédito, deposito y transferencia.</p><br />
            <img src="img/visa_mastercard_png.PNG" width="162" height="50" alt="visa y master"> <a class="btn-main" href="secciones.php"><i class="icon-chevron-right"></i> Publicar</a>
          </div>
          
        </div>
        
        
        
        <div class="row">
          <div class="col-sm-12 text-center">
            <h5><a class="more" href="secciones.php"><i class="fa fa-chevron-circle-left"></i> Ir a las secciones</a></h5>
          </div>
        </div>
        
      </div>
    </section>    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>