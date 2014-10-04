<?php

include("brow.php");
$br= new browser();

//print_r($br->whatBrowser());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="language" content="es-ve">
<meta name="author" content="YP Industries"/>
<meta name="description" content="Sitio web de la empresa Telopongoenlapuerta.com la cual ofrece el servicio de envios puerta a puerta desde Panamá hacia Guatemala,Nicaragua,Costa Rica,Honduras,Ecuador,México,Colombia,Venezuela. Venta, asesoría,Servicios de traslados ejecutivos en Panamá,100% garantizado y confiable, Telopongoenlapuerta.com es su aliado de negocios en Panamá ">
<meta name="keywords" content="telopongoenlapuerta.com,Tecnologia,envios,tramites,puerta a puerta,servicio ejecutivo,traslados panama,">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<title>Telopongoenlapuerta.com || Env&iacute;os Garantizados a Venezuela  </title>
<?php if ($br->isSafari()) { ?> 
<link href="css/chrome.css" rel="stylesheet" type="text/css"/>
<?php } else if ($br->isFirefox()) {?>
<link href="css/moz.css" rel="stylesheet" type="text/css"/>
<?php } else {?>
<link href="css/ie.css" rel="stylesheet" type="text/css"/>
<?php } ?>
</head>
<body>
<div class="body">
		<div class="image">
        		<img src="images/construcc.jpg" />
        </div>

</div>
</body>
</html>