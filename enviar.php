<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$destinatario = "ever_franco7@hotmail.com";
$asunto = "prueba";

$carta = "De: $name \n";
$carta .= "Mail: $mail";

mail($destinatario, $asunto, $carta);

header("Location:index.html");
?>