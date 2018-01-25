<?php 
session_start();
if ($_SESSION['tipo']<>3)  
	{
	header('Location: index.php');
	}
include "tools/corelib.php";
$_SESSION['valor'] = 10; //Activa la opcion del menu actual
include "header.php";
require_once('tools/mypathdb.php');

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
    <?php
    $fecha_1= date("Y-m-d", strtotime("-1 day")) ; // resta 1 día
	$fecha_2= date("Y-m-d", strtotime("-2 day")) ; // resta 2 día
	$fecha_3= date("Y-m-d", strtotime("-3 day")) ; // resta 3 día
	$fecha_4= date("Y-m-d", strtotime("-4 day")) ; // resta 4 día
	$fecha_5= date("Y-m-d", strtotime("-5 day")) ; // resta 5 día
	$fecha_6= date("Y-m-d", strtotime("-6 day")) ; // resta 6 día
	$fecha_7= date("Y-m-d", strtotime("-7 day")) ; // resta 7 día    
   
    $fechaActual= date("Y-m-d"); // obtener la fecha actual
 //   echo $fechaActual;
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_1'");
   $resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$total1 = $total1 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total1;
	
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_2'");
   $resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$total2 = $total2 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total2;

   
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_3'");
   $resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$total3 = $total3 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total3;

  
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_4'");
   $resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$total4 = $total4 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total4;
	 
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_5'");
   $resultado=mysql_query($query,$dbConn);
       while($data_av=mysql_fetch_array($resultado))
      {
		$total5 = $total5 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total5;
	   
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_6'");
   $resultado=mysql_query($query,$dbConn);
        while($data_av=mysql_fetch_array($resultado))
      {
		$total6 = $total6 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total6;
	   
   $query = ("SELECT * FROM tbl_avisos WHERE av_fechaVenta= '$fecha_7'");
   $resultado=mysql_query($query,$dbConn);
       while($data_av=mysql_fetch_array($resultado))
      {
		$total7 = $total7 + $data_av['av_total'];
	  }
	  $granTotal = $granTotal + $total7;
	  
	$fecha_1= date("d", strtotime("-1 day")) ; // resta 1 día
	$fecha_2= date("d", strtotime("-2 day")) ; // resta 2 días
    $fecha_3= date("d", strtotime("-3 day")) ; // resta 3 días
    $fecha_4= date("d", strtotime("-4 day")) ; // resta 4 días
    $fecha_5= date("d", strtotime("-5 day")) ; // resta 5 días
    $fecha_6= date("d", strtotime("-6 day")) ; // resta 6 días
    $fecha_7= date("d", strtotime("-7 day")) ; // resta 7 días
  ?>
    
    <script src="js/Chart.js"></script>
    	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : [<?php echo $fecha_7?>,<?php echo $fecha_6?>,<?php echo $fecha_5?>,<?php echo $fecha_4?>,<?php echo $fecha_3?>,<?php echo $fecha_2?>,<?php echo $fecha_1?>],
			datasets : [
				{
					label: "ventas diarias",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [<?php echo $total7?>,<?php echo $total6?>,<?php echo $total5?>,<?php echo $total4?>,<?php echo $total3?>,<?php echo $total2?>,<?php echo $total1?>]
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
            <h3> Gráfica de ventas diarias</h3>
            <p class="lead">Última semana</p>
            <p>En el eje de las  ordenas se aprecian la cantidad de ventas y en el eje de las  abscisas los últimos 7 días.</p>
            <p>&nbsp;</p>
          </div>
          <div style="width:30%">
			<div>
				<canvas id="canvas" height="450" width="600"></canvas>
			</div>
		</div>
        Total vendido: <?php echo $granTotal;?>
        </div>
      </div>
    </section>
    
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>