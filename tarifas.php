<?php 
session_start();
include "tools/corelib.php";
$_SESSION['valor'] = 4; //Activa la opcion del menu actual
include "header.php";
?>
     <!--Content-->
     <style type="text/css">
<!--
#page-title .container .row .col-sm-12.text-center h3 {
	color: #000;
}
#content2 .container .row .col-sm-12 .list-unstyled.pricing-table.active.text-center .price {
	color: #000;
}
#content2 .container .row .col-sm-12 .list-unstyled.pricing-table.active.text-center .features .fa.fa-ellipsis-h.fa-lg {
	color: #000;
}
#content2 .container .row .col-sm-12 .list-unstyled.pricing-table.active.text-center .features {
	color: #000;
}
#content2 .container .row .col-sm-12 .list-unstyled.pricing-table.active.text-center .info {
	color: #000;
}
-->
     </style>
     
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>Tarifas</h3>
          </div>
        </div>
      </div>
    </section>


    <!--Content-->
    <section id="content2" class="section">
      <div class="container">
        
        <div class="row">
          
          
          <div class="col-sm-12">
            <ul class="list-unstyled pricing-table active text-center">
    					<li class="headline"><h2>Avisos clasificados</h2></li>
    					<li class="price">Hasta 15 palabras Bs 1053.57 cada aviso<br />
    					</li>
    					<li class="features"><i class="fa fa-ellipsis-h fa-lg">Palabra adicional Bs 110.71 cada una<br />
    					</i></li>
                        <li class="features">Minianuncios sin recuadro<br /></li>
              <li class="info">B&aacute;sica Vigente desde el 15/08/2017</li>
    					<li class="features"><i class="fa fa-check fa-lg"></i></li>
    					<li class="features last btn-main"><a href="secciones.php"><span class="white">  Publicar ya!</span></a></li>
			</ul>
          </div>
          
          
            
        </div>
      </div>
    </section>   
    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>