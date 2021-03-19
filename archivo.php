<?php 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$mensaje = "<h1>Te llegó un mensaje de la web</h1>";
$mensaje .= "<ul>";
$mensaje .= "<li>Nombre: " . $nombre . "</li>";
$mensaje .= "<li>Apellio: " . $apellido . "</li>";
$mensaje .= "<li>Email: " . $email . "</li>";
$mensaje .= "<li>Comentario: " . $comentario . "</li>";
$mensaje .= "</ul>";

$headers = "MIME-Version:1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:". $nombre . "<" . $email . ">" . "\r\n";
$headers .= "Cc: lmbiagiotti@gmail.com" . "\r\n";

$destino = "lucas.biagiotti@davinci.edu.ar";
$asunto = "Contacto desde el formulario de la web";

mail($destino, $asunto, $mensaje, $headers);

header("Location:gracias.html");

?>