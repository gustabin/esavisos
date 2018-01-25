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
    <script src="js/Chart.js"></script>
    	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["13/01","14/01","15/01","16/01","17/01","18/01","19/01"],
			datasets : [
				{
					label: "ventas diarias",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [9,6,8,5,2,5,8]
				}
			]
		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}

	</script>
    
    <section id="content1" class="section">
      <div class="container">
        <div class="row margin-60">
          <div class="col-sm-12">
            <h3>Tu publicación se ha realizado con exito</h3>
            <p class="lead">Que debes saber</p>
            <p>Cada anuncio que recibimos es revisado por nuestros analista a fin de verificar que cumplan con las regulaciones contempladas en esta materia. Si todo esta bien no tienes de que preocuparte, tu anuncio saldrá publicado en la(s) fecha(s) que indicastes. En caso contrario te notificaremos la cancelación de tu publicación via correo electrónico y te devolveremos tu dinero electronicamente.</p>
            <p>Puedes venir a nuestra receptoria ubicada en Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana, Maracay, Edo. Aragua, de Lunes a Viernes en horario de oficina a retirar tu factura.</p>
          </div>
          <div style="width:30%">
			<div>
				<canvas id="canvas" height="450" width="600"></canvas>
			</div>
		</div>
        </div>
        
        
      </div>
    </section>
    
   
    
   
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>