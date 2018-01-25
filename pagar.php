<?php 
session_start(); 
include "escribirtxt.php";
include "registrarPago.php";
include "tools/corelib.php";
include "nombreSeccion.php";
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(0);
include "headerPagar.php";
require_once ('lib/mercadopago.php');

$monto = floatval ($_SESSION['total']);
$descripcion = $_SESSION['textoAviso'];

//$mp = new MP('384765699688552', 'SWCUvzyYSxjorBkDXb99wy6PXdfQ8DKf'); //credenciales arias3000
$mp = new MP('3505046689785064', 'eYAYVdzzEM4tq2D7eKUbHt83VMcEVZuK'); //credenciales esavisos
//$mp->sandbox_mode(TRUE);

$mp->sandbox_mode(FALSE);

$preference_data = array(

    "items" => array(

	   array(
  
		   "title" => "Minianuncios el siglo",
  
		   "quantity" => 1,
  
		   "currency_id" => "VEF",
  
		   "description" => $descripcion,
  
		   "unit_price" => $monto
  
	   )

    )

);

$preference = $mp->create_preference ($preference_data);

?>



<style type="text/css">

<!--

.main .page-top .container .row .col-md-12 h2 {

	color: #000;

}

#destacado {

	color: #000;

}

-->

</style>





<div role="main" class="main"> 



	<section class="page-top">

		<div class="container">			

			<div class="row">

				<div class="col-md-12">                            

					<h3>el siglo online, la forma más fácil de publicar</h3>

				</div>

			</div>

		</div>

	</section>

    

  <div class="container">

				<div class="col-sm-6; align:'center';">

						<div class="box-content">

							<h2><span id="destacado">Asi será la publicación de tu clasificado</span></h2>

                            

                                <p>

                          <h4>Sección: &nbsp; <span id="destacado"><?php mostrarTexto($_SESSION['seccion']); ?></span>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="secciones.php">Cambiar</a>                              

                      <p></p>

							      Fecha de Publicación: &nbsp;	<span id="destacado"><?php //echo $fecha ?><?php echo $_SESSION['fecha'] ?></span>

								  <p></p> 

                                  Dias: &nbsp; <span id="destacado"><?php echo $_SESSION['dias'] ?></span>

                                  <p></p> 

                                  Texto del anuncio: &nbsp; <span id="destacado"><?php echo $_SESSION['textoAviso'] ?></span>

                                  <p></p> 

                                  Palabras adicionales: &nbsp; <span id="destacado">

								  <?php 

								  	if ($_SESSION['adicionales']<0) 

										{

									  		$_SESSION['adicionales']=0;

									  	}

									echo $_SESSION['adicionales'];

								  ?></span>

                                  <p></p> 

                                  Subtotal: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['subtotal'], 2, '.', ''); ?>&nbsp; BsF</span>

                                  <p></p> 

                                  IVA: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['iva'], 2, '.', '');  ?>&nbsp; BsF</span>

                                  <p></p> 

                                  TOTAL: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['total'], 2, '.', ''); ?>  &nbsp; BsF</span>

  								  </h4>

				        	    </p>

									

  <script type="text/javascript" src="http://mp-tools.mlstatic.com/buttons/render.js"></script>



<script type="text/javascript">

function execute_my_onreturn (json) {

  if (json.collection_status=='approved'){

    alert ('Pago acreditado');

	window.location.href='emailUsuario.php?status=1';

  } else if(json.collection_status=='pending'){

    alert ('El usuario no completó el pago');
	
	window.location.href='emailUsuario.php?status=2';

  } else if(json.collection_status=='in_process'){    

    alert ('El pago está siendo revisado');    
	
	window.location.href='emailUsuario.php?status=3';

  } else if(json.collection_status=='rejected'){

    alert ('El pago fué rechazado, el usuario puede intentar nuevamente el pago');
	
	window.location.href='emailUsuario.php?status=4';

  } else if(json.collection_status==null){

    alert ('El usuario no completó el proceso de pago, no se ha generado ningún pago');
	
	window.location.href='emailUsuario.php?status=5';

  }

}

</script>                                





<div class="row col-sd-12">

    <div class="col-md-6">            

      <p>

      <a href="<?php echo $preference['response']['init_point']; ?><?php //echo $preference['response']['sandbox_init_point']; ?>" name="MP-Checkout" class="lightblue-M-Ov-VeAll" mp-mode="modal" onreturn="execute_my_onreturn">Pagar</a>

      </p>

    </div>

          <div class="col-md-6">

            <p><a href="avisoCrear.php?cancelar=1">Cancelar</a></p>

          </div>

</div>

<script type="text/javascript">

    (function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;

    s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";

    var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}

    window.$MPBR_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();

</script>    

				  </div>

                        <p></p>

                        <p></p>

				</div>

  </div>

</div>


 <!-- .................................... $footer .................................... -->

  <?php include "footer.php"; ?>