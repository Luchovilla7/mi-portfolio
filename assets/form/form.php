<?php

//creación de las variables guardando los inputs del form
$nombre = $_POST ['name'];
$correo = $_POST ['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

// Como me va a llamar el cuerpo del mail, o sea lo que la gente escribió en el form 
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su email es: " . $correo . "\r\n";
$mensaje = "El asunto es: " . $asunto . "\r\n";
$mensaje = "Mensaje: " . $_POST ['mensaje'] . "\r\n";

$destinatario = 'luchovillalba7@gmail.com';
$desde = 'Este email fue enviado desde tu Portafolio Web';

mail($destinatario, $desde, utf8_decode($mensaje), $header);

header('Location:exito.html');

?>