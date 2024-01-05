<?php
$conexion = new mysqli('localhost', 'winston', '1234', 'sistema_inventario');

if ($conexion->connect_error) {
    die('Error de conexión a la base de datos: ' . $conexion->connect_error);
}

// Realizar la consulta para obtener todos los registros
$resultado = $conexion->query("SELECT * FROM registros");

$registros = [];

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $registros[] = $fila;
    }
}

// Devolver los registros como JSON al cliente
echo json_encode($registros);

$conexion->close();
?>