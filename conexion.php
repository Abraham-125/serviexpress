<?php
// Configuración de la base de datos
$host = "localhost"; // Cambia si es necesario
$usuario = "root"; // Cambia por tu usuario
$contrasena = ""; // Cambia por tu contraseña
$base_de_datos = "serviexpress"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
