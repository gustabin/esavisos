<?php 
session_start();
include "tools/corelib.php";
$_SESSION['valor'] = 1; //Activa la opcion del menu actual
include "header.php";
?>

<!--Content-->
<style type="text/css">
<!--
.titulo {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-8 h4 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-8 p {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 h4 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 p {
	color: #000;
}
.container .row.margin-40 .col-sm-6 p {
	color: #000;
}
.container .row.margin-40 .col-sm-12 h4 {
	color: #000;
}
.container .row.margin-40 .col-sm-12 p {
	color: #000;
}
.container .row .col-sm-12 h3 {
	color: #000;
}
.subtitulo {
	color: #000;
}
.container .row.margin-40 .col-sm-4 p {
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
                <li><img src="img/aviso1.jpg" class="img-responsive" alt="anuncios online" /></li>
                <li><img src="img/aviso2.jpg" class="img-responsive" alt="avisos el siglo" /></li>
                <li><img src="img/aviso3.jpg" class="img-responsive" alt="avisos online" /></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            <h3>Publica tu minianuncio </h3>
          </div>
        </div>
        
        <div class="row margin-40">
          <div class="col-sm-4">
            <p class="subtitulo"> Es grandioso que quieras publicar con nosotros pero primero necesitas ingresar.</p>
            <p> Si ya tienes una cuenta con nosotros puedes  <a href="login.php"><span class="add-on"><i class="fa fa-user"></i></span> ingresar</a> o sino entonces <a href="signup.php"><span class="add-on"><i class="fa fa-pencil"></i></span> registrate</a> para poder realizar tu pago</p>
          </div>
          
          <div class="col-sm-4">
            <h3>Yo necesito una cuenta</h3>
            <br />
              <a class="btn-main" href="signup.php"><i class="fa fa-chevron-right"></i> Registrar</a><br />
          </div>
          
          <div class="col-sm-4">
            <h3>Yo tengo una cuenta</h3>
            <br />
              <a class="btn-main" href="login.php"><i class="fa fa-chevron-right"></i> Ingresar</a><br />
          </div>
          
        </div>


      </div>
</section>    
    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>