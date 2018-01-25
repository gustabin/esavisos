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
-->
    </style>
    
    <section id="content1" class="section">
      <div class="container">
      
      <div class="row">
          <div class="col-sm-12">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="img/anuncios online.jpg" class="img-responsive" alt="anuncios online" /></li>
                <li><img src="img/avisos el siglo.jpg" class="img-responsive" alt="avisos el siglo" /></li>
                <li><img src="img/avisos online.jpg" class="img-responsive" alt="avisos online" /></li>
              </ul>
            </div>
          </div>
        </div>
      
      
        <div class="row">
          <div class="col-sm-12">
            <h3>Hemos recibido tu información</h3>
          </div>
        </div>
        
        <div class="row margin-40">
          <div class="col-sm-8">
            <h4>Estimado cliente</h4>
            <p class="subtitulo"> Gracias por contactárnos, en poco tiempo lo estaremos contactando.</p>
          </div>
          
          <div class="col-sm-4">
            <h5>Recibimos un amplio volúmen de mensajes diariamente y los atendemos en el mismo orden en que van llegando, le pedimos por favor un poquito de paciencia.</h5>
          </div>
          
        </div>
        

        
      </div>
    </section>    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>