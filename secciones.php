<?php 
session_start();
$_SESSION['textoAviso']="";
include "tools/corelib.php";
$_SESSION['valor'] = 5; //Activa la opcion del menu actual
include "header.php";
//include "menuSignin.php"; 
?>
         <!--Content-->
    <section id="page-title" class="section">
      <div class="container"> 
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3> Secciones</h3>  
          </div>
        </div>
      </div>
    </section>
      
     
    <!--Work-->
    <section id="content2" class="section">
      <div class="container text-center">          
          
          <div class="row margin-40">
        		
        		<!--Project Thumbnail One-->
        		<div class="col-sm-6">
        			<div class="thumbs">
          			<img src="img/indice inmobiliario.jpg" class="img-responsive" alt="Image Size 430x280">
          			<a href="inmobiliario.php">
          				<span class="title">
          					<span><i class="fa fa-link fa-2x"></i></span>
          				</span>	
          			</a>
       			  </div>
        			
        			<div class="project-title margin-30">
        		    <h4>Indice inmobiliario</h4>
        		  </div>
        		</div>
        		
        		<!--Project Thumbnail Two-->
        		<div class="col-sm-6">
        			<div class="thumbs">
          			<img src="img/indice general.jpg" class="img-responsive" alt="Image Size 430x280">
          			<a href="general.php">
          				<span class="title">
          					<span><i class="fa fa-link fa-2x"></i></span>
          				</span>	
          			</a>
       			  </div>
        			
        			<div class="project-title margin-30">
        		    <h4>Indice general</h4>
        		  </div>
        		</div>
                
        		</div><!--End Row of Work-->
                
      </div>
    </section>          
              
    
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>