<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: iniciarsesion.php'); // Redirigir si no hay sesión activa
    exit();
}

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
        div{
        }
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
        input{
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
        <div class="col" style="margin:0px; padding:0px; margin-left:20px">
            <h1 style="font-weight:lighter;">Datos de</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px">
        </div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px">
        </div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px; ">
            <h1 style="margin-left:80px;font-weight:bolder;"><span style="font-weight: lighter;">la </span>Reserva</h1>
        </div>
        <div class="col-5" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>


<div class="container text-center" style="margin-top:80px;">
    <div class="row justify-content-center">
        <div class="col-10 col-md-8">
            <!-- Sección de confirmación con el ícono del ticket -->
            <div class="d-flex align-items-center justify-content-center mb-4">
                <h5 style="font-weight: bolder; margin: 0;">Tu reserva ha sido confirmada.</h5>
                <img src="ticket.png" alt="Ticket" style="width: 40px; height: 40px; margin-left: 15px;">
            </div>

            <!-- Mensaje informativo -->
            <h5 style="font-weight: 400; margin: 10px 0;">Días previos a su hora agendada se le comunicará</h5>
            <h5 style="font-weight: 400; margin: 10px 0;">a través de sus datos de contacto.</h5>

            <!-- Agradecimiento final -->
            <h5 style="font-weight: bolder; margin-top: 30px;">Gracias por confiar en SERVIEXPRESS.</h5>
        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-center" style="background-color: black; height:60px;padding:10px;margin-bottom:120px;margin-top:80px">
    <a href="index.php" style="text-decoration: none;"><h4 style="color: white;">Inicio</h4></a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
