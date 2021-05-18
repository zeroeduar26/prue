<?php

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    /*------------*/

    $destinatario = "mix19942321gmail.com";
    $asunto = "Enviado desde nuestra pagina web";

    $carta = "De: $nombre \n";
    $carta = "Correo: $email \n";
    $carta = "Telefono: $telefono \n";
    $carta = "Mensaje: $mensaje \n";

    mail($destinatario, $asunto, $carta);
    header('Location:enviado.html');

?>