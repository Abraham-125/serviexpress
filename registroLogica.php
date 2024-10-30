<?php
session_start(); // Asegúrate de que la sesión esté iniciada

// Asegúrate de que la conexión a la base de datos esté establecida aquí
include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rut = $_POST['rut'];
    $contrasena = $_POST['contrasena']; // Almacena la contraseña directamente
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];

    // Preparar la consulta
    $stmt = $conexion->prepare("INSERT INTO usuario (nombre, apellido, rut, contrasena, correo, telefono, tipo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nombre, $apellido, $rut, $contrasena, $correo, $telefono, $tipo);

    if ($stmt->execute()) {
        // Redirigir a la página de inicio o login
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Si no es una solicitud POST, puedes redirigir o mostrar un error
    header("Location: index.php"); // o mostrar un mensaje de error
    exit;
}
?>
