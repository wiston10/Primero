<?php
$conexion = new mysqli('localhost', 'winston', '1234', 'sistema_inventario');

if ($conexion->connect_error) {
    die('Error de conexión a la base de datos: ' . $conexion->connect_error);
}

$datos = json_decode(file_get_contents('php://input'), true);

$consulta = $conexion->prepare("INSERT INTO registros (nombre, cantidad, descripcion, fecha, precio) VALUES (?, ?, ?, ?, ?)");
$consulta->bind_param('sissd', $datos['nombre'], $datos['cantidad'], $datos['descripcion'], $datos['fecha'], $datos['precio']);

if ($consulta->execute()) {
    echo 'Registro guardado exitosamente.';
} else {
    echo 'Error al guardar el registro.';
}

$consulta->close();
$conexion->close();
?>
