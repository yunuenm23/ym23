<?php
// Declaración de variables del formulario
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

// Datos del email
$for = 'moncadayunuen@gmail.com';
$titulo = 'S&S Solicitud de presupuesto';
$header = 'From: ' . $email;
$msjCorreo = "Subject: $subject\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {

    if (mail($for, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
}

header("location: index.html");