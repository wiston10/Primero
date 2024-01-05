<?php

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $descripcion = $_POST["descripcion"];

    // Aquí puedes realizar acciones adicionales, como enviar un correo electrónico, guardar en una base de datos, etc.

    // Por ejemplo, imprimir un mensaje de confirmación
    echo "Solicitud de producto enviada con éxito.";
} else {
    // Si no se han enviado datos por POST, redirigir a la página de inicio o mostrar un mensaje de error
    echo "Error al procesar la solicitud.";
}
?>
