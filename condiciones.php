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
        <div class="row margin-60">
          <div class="col-sm-12">
          				<span style="margin-right: 10px">     
                        	<a href="javascript:history.go(-1);"><i class="icon-large icon-chevron-left"></i>Atras</a>                            
                        </span>
            <h3> Condiciones generales</h3>
            <p class="lead">Revise su clasificado</p>
            <p>Al momento de crear su clasificado le agradecemos leer cuidadosamente: Texto, Sección y Fecha, ya que al pagar está aceptando todo lo impreso en el mismo.</p>
            <p class="lead">Reclamos</p>
            <p>Cualquier objeción sobre un aviso clasificado clasificado publicado incorrecto debe hacerse el 1er día de la publicación indicado en la factura, de lo contrario queda sin efecto cualquier tipo de reclamo.</p>
            <p>Cuando por problemas técnicos nos veamos imposibilitados de publicar su aviso, el cliente debe solicitar su nuevo día de publicación formalmente.</p>
            <p>NO ESTÁ PERMITIDO BAJO NINGÚN CONCEPTO: ANULACIÓN DE AVISOS, CAMBIOS DE FECHAS DE PUBLICACIÓN, CAMBIOS DE TEXTO Y/O CAMBIOS DE SECCIÓN.</p>
          </div>
        </div>
        
        
      </div>
    </section>
    
   
    
   
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>