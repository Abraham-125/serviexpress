<?php
session_start(); // Asegúrate de que la sesión esté iniciada
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
    </style>
</head>
<body>

<?php include 'navbar.php'; ?> <!-- Incluir el navbar aquí -->

<!-- Contenido principal -->
<div class="container-fluid" style="margin:0px; padding:0px; margin-top:110px">
    <div class="row">
        <div class="col-4" style="margin:0px; padding:0px">
            
            <div style="background-color: black;height:100%;width:100%;margin:0px;clip-path: polygon(0% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
        </div>
        <div class="col" style="margin:0px; padding:0px; ">
            <h1 style="font-weight:lighter;">Taller Mecanico</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px">
        </div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px">
        </div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px; ">
            <h1 style="margin-left:80px;font-weight:bolder;">SERVIEXPRESS</h1>
        </div>
        <div class="col-4" style="margin:0px; padding:0px">
            <div style="background-color: black;height:100%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);"></div>
        </div>
    </div>
</div>

<!-- Sección de información -->
<div class="container" style="margin-top: 100px;margin-left: 80px;">
    <div class="row">
        <!-- Sección de "¿Quiénes somos?" -->
        <div class="col-5">
            <h3>¿Quiénes Somos?</h3>
            <p>SERVIEXPRESS es un taller mecánico innovador, comprometido con ofrecer soluciones de mantenimiento y reparación con un enfoque en la digitalización de procesos. Nuestro objetivo es mejorar la experiencia del cliente mediante sistemas de gestión digital, que permiten una atención rápida, eficaz y totalmente personalizada.</p>
        </div>
    </div>
</div>

<!-- Sección de información -->
<div class="container-fluid" style=" margin-bottom: 120px !important;margin:0px;padding:0px">
    <div class="row" style="margin-right:0px;padding-right:0px">
        <div class="col-6">

        </div>
        <div class="col">
            <h3>Nuestros Servicios</h3>
            <p>Ofrecemos un amplio catálogo de servicios, desde diagnósticos digitales y seguimiento en línea de tu vehículo, hasta citas personalizadas que puedes programar desde cualquier dispositivo. Nuestro equipo profesional y altamente calificado utiliza herramientas digitales avanzadas para garantizar un servicio de alta calidad y total transparencia.</p>
            <div style="background-color: black;padding:20px">
                <a href="agendarCita.php" style="color: white;text-decoration:none"><h5>Agenda tu Cita</h5></a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
