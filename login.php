<?php
print_r($_POST);
?>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Guardar en un archivo de texto
    $archivo = 'usuarios.txt';
    $datos = "Correo: " . $correo . " | Contraseña: " . $password . "\n";

    file_put_contents($archivo, $datos, FILE_APPEND | LOCK_EX);

    echo "Datos guardados correctamente.";
} else {
    echo "Acceso no autorizado.";
}
?>
