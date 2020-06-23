<?php
$textnom=$_POST['textnom'];//Recibo la variable pasada por post
$textmai=$_POST['textmai'];
$sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post
include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;
 $valor = $textnom . " - " . $textmai;
$qrCode = new QrCode($valor);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 
 
 $imageData = base64_encode($image);//Codifico la imagen usando base64_encode
 
echo '<img src="data:image/png;base64,'.$imageData.'">';
echo "<br><br>";
echo "<a href=\"portafolios.html\">Portafolio de usuario</a>"; 
 
?>