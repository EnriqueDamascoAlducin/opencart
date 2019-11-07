<?php
// Text
/*
$_['text_title']				= 'Cheque / Money Order';
$_['text_instruction']			= 'Cheque / Money Order Instructions';
$_['text_payable']				= 'Make Payable To: ';
$_['text_address']				= 'Send To: ';
$_['text_payment']				= 'Your order will not ship until we receive payment.';
*/

$date 	 = date("Y-m-d");
$dateend = date("2017-11-30");

if($date < $dateend)
	$_['text_title']				= 'Deposito / Transferencia <b>(10% de descuento)</b>';
else
	$_['text_title']				= 'Deposito / Transferencia';



$_['text_instruction']			= 'Instrucciones para Deposito / Transferencia';
$_['text_payable']				= 'Depositar o Transferir a: ';
$_['text_address']				= 'Enviar comprobante al correo: ';
$_['text_payment']				= 'Su orden no sera enviada hasta recibir el pago, si no lo recibimos dentro de 24 Hrs, su orden ser&aacute; cancelada.<br>El plazo de entrega se cuenta a partir del momento de ser confirmado el pago.';
