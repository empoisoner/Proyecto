<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST") { //REVISA SI ESTO ESTA BIEN
    $nombre= $_POST['nombre'];
    $email= $_POST['email'];
    $mensaje= $_POST['mensaje'];
    $para= 'ventas@telopongoenlapuerta.com';
    $titulo= 'ASUNTO DEL MENSAJE';
    $header='From: ' . $email;
    $msjCorreo= "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

    if ($_POST['submit']) {
        if (mail($para, $titulo, $msjCorreo, $header)) {
        echo "<script language='javascript'>
        alert('Mensaje enviado, muchas gracias.');
        window.location.href = '/index.html';
        </script>";
        } else {
        echo 'Falló el envio';
        }
    }
}   // FIN DE MI MODIFICACION
?>

<!-- InstanceBegin template="/Templates/telopongo.dwt" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
    <meta name="language" content="es-ve">
    <meta name="author" content="YP Industries"/> <!-- sin K? ¬¬'' -->
    <meta name="description" content="Sitio web de la empresa Telopongoenlapuerta.com la cual ofrece el servicio de envios puerta a puerta desde Panamá hacia Guatemala,Nicaragua,Costa Rica,Honduras,Ecuador,México,Colombia,Venezuela. Venta, asesoría,Servicios de traslados ejecutivos en Panamá,100% garantizado y confiable, Telopongoenlapuerta.com es su aliado de negocios en Panamá ">
    <meta name="keywords" content="telopongoenlapuerta.com,Tecnologia,envios,tramites,puerta a puerta,servicio ejecutivo,traslados panama,">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Cont&aacute;ctenos || Telopongoenlapuerta.com</title>
    <!-- InstanceEndEditable -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet" type="text/css"/>    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" href="css/skitter.styles.css" media="all" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.skitter.min.js"></script>    
    <script type="text/javascript" language="javascript">
    	$(document).ready(function() {
    		$('.box_skitter_large').skitter({
    			theme: 'round',
    			dots: true,
    			label:false, 
    			preview: false,
    			numbers_align: 'center'
    		});
    	});
    </script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>
  <div class="wrapper">
    <div class="content">
        <div class="header">
            <img src="images/banner.jpg">
        </div>
        <div class="navi">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="contacto.php">Cont&aacute;ctenos</a></li>
            </ul>
        </div>
        <div class="main-cont">
        <!-- InstanceBeginEditable name="titulo de la seccion" -->
            <h1>Cont&aacute;ctenos</h1>
          
          <div class="mailinfo"><p>Su opini&oacute;n es importante para Nosotros,S&iacute; est&aacute;s interesado en contratar nuestros servicios, por favor rellena el formulario que se muestra a continuaci&oacute;n</p></div>
          

          <div class="mail">

                                <form action="contacto.php" method="post">
                    <label for="nombre">Nombre:</label>
                     <input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required />
                     <label for="email">Email:</label>
                     <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required />
                     <label for="mensaje">Mensaje:</label>
                     <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
                     <input id="submit" type="submit" name="submit" value="Enviar" />
                    </form>
          
          
          </div>
          
           
           
             <!-- InstanceEndEditable -->                
        </div>         
		<footer>
            <div>          
    			<section id="about">
    				<header>
    					<h3>Nuestra Empresa</h3>
    				</header>
    				<p>Telopongoenlapuerta.com es el nuevo sitio de encomiendas que pone en sus manos,una alternativa sencilla y confiable para realizar sus env&iacute;os hasta la comodidad de su Hogar u Oficina. </p>
                 
                    <p>De igual manera ponemos a su disposici&oacute;n los servicios de <b>realizaci&oacute;n de tr&aacute;mites</b> y <b>traslados ejecutivos</b>. Siempre pensando en ofrecerle el mejor servicio</p>
    			</section>    		
    			<section id="popular">
    				<header>
    					<h3>Encu&eacute;ntranos en la web!</h3>
    				</header>
    				<ul>
                   
    					<li><a href="#"><img src="images/twitter.png" class="posicion"><b></b></a></li>
                        <li><a href="#"><img src="images/facebook.png" class="posicion"> <b></b></a></li>    					    					
    				</ul>
    			</section>
               
            </div>
            <div class="madeby">
				 <p> Diseño Realizado por:<!--<a href="http://www.empoisoner.webege.com/" target="_blank">--> YPK Industries</a>/<a href="mailto:dmijares86@gmail.com">Contáctenos</a> 2014 telopongoenlapuerta.com PANAM&Aacute; - <a href="www.telopongoenlapuerta.com:2095">WebMail</a></p>
            </div>
      </footer>

</div>
</body>
<!-- InstanceEnd --></html>