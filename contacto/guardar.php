<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $contenido = "Nombre: $nombre\nCorreo Electrónico: $correo\nMensaje: $mensaje\n\n";

    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, $contenido);
    fclose($archivo);

    echo "Datos guardados correctamente.";
}
?>