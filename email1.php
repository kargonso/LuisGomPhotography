<?php
$destino= "luisgom83@outlook.com";
$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['email'];
$servicio = $_REQUEST['servicio'];
$mensaje = $_REQUEST['mensaje'];
$contenido= "nombre: " .$nombre ."\ntelefono: " .$telefono . "\nemail" .$email . "\nservicio:" .$servicio . "\nmensaje" . $mensaje ;
mail ($destino,"Formulario", $contenido); 
header ("Location:gracias.html")

?>