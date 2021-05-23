<?php
    $destinatario = 'mopradolce@gmail.com';
    // aqui es donde llegaran los mails
    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $asunto = $_POST ['asunto'];
    $msj = $_POST ['msj'];

    $header = 'Enviado desde la pagina de Tareas de Mar Opradolce';
    $msjCompleto = $mensaje . '\nAtentamente: ' . $nombre;

    mail($destinatario, $asunto, $msjCompleto, $header);
    echo '<script>alert('Correo enviado exitosamente')</script>';
    echo '<script>setTimeOut(\"location.href='index.html' \", 1000)</script>';
?>