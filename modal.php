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
    <style type="text/css">
* {
margin: 0;
padding: 0;
}

body {
font-family: Georgia, "Times New Roman", Times, serif;
font-size: 2em;
background: #9fffff;
color: #0000ff;
}

a {
color: #F00;
}

/* base semi-transparente */
    .overlay{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index:1001;
opacity:.75;
        -moz-opacity: 0.75;
        filter: alpha(opacity=75);
    }

    /* estilo para la ventana modal */
    .modal {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        background: #fff;
color: #333;
        z-index:1002;
        overflow: auto;
    }
    </style>
    
    <section id="content1" class="section">
      <div class="container">
        <div class="row margin-60">
          <div class="col-sm-12">
            <h3>Tu publicación se ha realizado con exito</h3>
            <p class="lead">Que debes saber</p>
            <p> <span class="masfuerte">Cada anuncio que recibimos es revisado por nuestros analista a fin de verificar que cumplan con las regulaciones contempladas en esta materia. Si todo esta bien no tienes de que preocuparte, tu anuncio saldrá publicado en la(s) fecha(s) que indicastes. En caso contrario te notificaremos la cancelación de tu publicación via correo electrónico y te devolveremos tu dinero electronicamente.</span></p>
            <p><span class="masfuerte">Puedes venir a nuestra receptoria ubicada en Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana, Maracay, Edo. Aragua, de Lunes a Viernes en horario de oficina a retirar tu factura.</span></p>
            <p><span class="masfuerte">Gracias por preferirnos.</span></p>
          </div>
        </div>
         <div id="fade" class="overlay" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
</div>

<div id="light" class="modal">
    <p>Contenido de la ventana modal. Para
<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">cerrar</a>
 basta un simple JavaScript.</p>
    </div>

    <p>Con un
<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';">simple click</a>
 podrás desplegar la ventana modal.</p>

        
      </div>
    </section>
    
   
    
   
       
                <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>