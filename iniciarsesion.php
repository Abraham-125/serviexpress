<?php
session_start(); // Asegúrate de que la sesión esté iniciada
include 'conexion.php'; // Asegúrate de que la conexión a la base de datos esté establecida

// Manejo del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Preparar la consulta para buscar al usuario
    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE correo = ? AND contrasena = ?");
    $stmt->bind_param("ss", $correo, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Almacena la información del usuario en la sesión
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nombre'] = $usuario['nombre'];
        $_SESSION['cliente_telefono'] = $usuario['telefono']; // Asegúrate de que el campo exista en la tabla
        $_SESSION['cliente_correo'] = $usuario['correo']; // Asegúrate de que el campo exista en la tabla

        // Redirige al usuario a la página de inicio
        header("Location: index.php");
        exit();
    } else {
        // Contraseña incorrecta o usuario no encontrado
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVIEXPRESS - Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .navbar-brand {
            font-weight: bold;
        }
        .black-bar {
            background-color: black;
            height: 10px;
            width: 100%;
            margin-top: 10px;
        }
        .header-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .header-subtitle {
            font-size: 1.2rem;
        }
        .btn-primary {
            background-color: black;
            border-color: black;
        }
        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }
        input {
            margin: 10px;
            border: 0px;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?> <!-- Incluir el navbar aquí -->

<!-- Contenido principal -->
<div class="container-fluid" style="margin:0px; padding:0px; margin-top:110px">
    <div class="row">
        <div class="col-4" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(0% 0%, 90% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
        <div class="col" style="margin:0px; padding:0px;">
            <h1 style="font-weight:lighter;margin-left:70px">Inicio de <span style="font-weight: bold;">Sesión</span></h1>
        </div>
        <div class="col-4" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>

<!-- Mostrar mensaje de error si existe -->
<?php if (isset($error)): ?>
    <div class="alert alert-danger text-center" role="alert" style="margin-top: 20px;">
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<form class="container d-flex justify-content-center" id="formulario" style="margin-top:60px" action="iniciarsesion.php" method="POST">
    <ul>
        <label for="correo" style="margin-right:35px;">Correo: </label>
        <input type="text" name="correo" required><br>
        <label for="contrasena">Contraseña: </label>
        <input type="password" name="contrasena" required><br>
    </ul>
</form>

<div class="container-fluid d-flex justify-content-center" style="background-color: black; height:60px;padding:10px;margin-bottom:120px;margin-top:80px">
    <button type="submit" form="formulario" style="background:none; border:none; color: white; cursor: pointer;">
        <h4 style="color: white;">Iniciar Sesión</h4>
    </button>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
