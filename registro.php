<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVIEXPRESS</title>
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
            margin: 10px 0; /* Espacio vertical para mantener un diseño limpio */
            border: 0;
            border-bottom: 1px solid black;
            width: 100%; /* Hacer que el campo ocupe el ancho completo */
        }
        label {
            margin-right: 10px; /* Espaciado para las etiquetas */
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
        <div class="col" style="margin:0px; padding:0px; margin-left:20px">
            <h1 style="font-weight:lighter;">Formulario</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px"></div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px"></div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px;">
            <h1 style="margin-left:80px;font-weight:bolder;"><span style="font-weight: lighter;">de </span>Registro</h1>
        </div>
        <div class="col-5" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center" style="margin-top:60px">
    <form class="container" action="registroLogica.php" method="POST" onsubmit="return validateForm()" style="width: 100%; max-width: 600px;">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required pattern="[A-Za-záéíóúÁÉÍÓÚ ]{1,20}" title="Solo letras y espacios, máximo 20 caracteres."><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required pattern="[A-Za-záéíóúÁÉÍÓÚ ]{1,20}" title="Solo letras y espacios, máximo 20 caracteres."><br>

        <label for="rut">RUT:</label>
        <input type="text" name="rut" required pattern="\d{1,8}-[\dKk]" title="Formato válido: 12345678-9"><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required minlength="6" title="Mínimo 6 caracteres."><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required pattern="\d{9}" title="Formato válido: 9 dígitos."><br>

        <label for="tipo">Tipo:</label>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="tipo" value="cliente" id="cliente" required>
    <label class="form-check-label" for="cliente">Cliente</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="tipo" value="proveedor" id="proveedor">
    <label class="form-check-label" for="proveedor">Proveedor</label>
</div>

        </div>

        <div class="container-fluid d-flex justify-content-center" style="background-color: black; height:60px;padding:10px;margin-bottom:120px;margin-top:80px">
        <button type="submit" style="background-color: transparent; border: none; color: white; font-size: 20px; cursor: pointer;">Registrar</button>
        </div>
    </form>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function validateForm() {
    let valid = true;

    // Limpiar mensajes de error (si hubiera)
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        input.setCustomValidity("");
    });

    // Validaciones de los campos
    const nombre = document.querySelector('input[name="nombre"]');
    const apellido = document.querySelector('input[name="apellido"]');
    const rut = document.querySelector('input[name="rut"]');
    const contrasena = document.querySelector('input[name="contrasena"]');
    const correo = document.querySelector('input[name="correo"]');
    const telefono = document.querySelector('input[name="telefono"]');

    // Validaciones específicas
    if (!nombre.checkValidity()) {
        nombre.setCustomValidity(nombre.title);
        valid = false;
    }
    if (!apellido.checkValidity()) {
        apellido.setCustomValidity(apellido.title);
        valid = false;
    }
    if (!rut.checkValidity()) {
        rut.setCustomValidity(rut.title);
        valid = false;
    }
    if (!contrasena.checkValidity()) {
        contrasena.setCustomValidity(contrasena.title);
        valid = false;
    }
    if (!correo.checkValidity()) {
        correo.setCustomValidity("Correo inválido.");
        valid = false;
    }
    if (!telefono.checkValidity()) {
        telefono.setCustomValidity(telefono.title);
        valid = false;
    }

    return valid; // Retornar false evitará el envío si hay errores
}
</script>
</body>
</html>
