<?php
// Text


$date 	 = date("Y-m-d");
$dateend = date("2017-11-30");

if($date < $dateend){
	$_['text_title']				= 'Tarjeta de Cr&eacute;dito o D&eacute;bito, procesado de forma segura por PayPal  <b>(10% de descuento o hasta 6 meses sin intereses)</b>';
}
else{
	$_['text_title']				= 'Tarjeta de Cr&eacute;dito o D&eacute;bito, procesado de forma segura por PayPal';
}


$_['text_reason']				= 'RAZ&Oacute;N';
$_['text_testmode']				= 'Advertencia: La pasarela de pago es en \'Sandbox Mode\'. Su cuenta no se cargar&aacute;.';
$_['text_total']				= 'IVA';