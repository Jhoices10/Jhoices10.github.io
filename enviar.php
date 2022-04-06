<?php  
// Datos para el correo
$destinatario = "jhoicesth5@gmail.com";


// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


// Enviando Mensaje
$header = "PASSA PASSA SOUND SYSTEM";
$mensajeCompleto = $mensaje. "\n Atentamente: " . $nombre;

mail($destinatario, $header, $mensajeCompleto );
header('Location:mensaje-de-envio.html');
?>