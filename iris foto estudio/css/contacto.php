<?php
$mensaje = $_POST['mensaje'];
$mensaje.= "\n--------------\n";
$mensaje.= "\nDe:". $_POST['nombre'];
$mensaje.= "\nE-mail:".$_POST['email'];

$destino= "sumi-suge@hotmail.com";
$remitente= $_POST['email'];
$asunto= "mensaje enviado por:".$_POST['nombre'];
mail ($destino,$asunto,$mensaje,"FROM:$remitente"); 

echo "Mensaje enviado. Gracias por contactarse.";
?>
