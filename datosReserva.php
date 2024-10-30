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
        div {
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
        <div class="col" style="margin:0px; padding:0px; margin-left:20px">
            <h1 style="font-weight:lighter;">Datos de</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px"></div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px"></div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px;">
            <h1 style="margin-left:80px;font-weight:bolder;"><span style="font-weight: lighter;">la </span>Reserva</h1>
        </div>
        <div class="col-5" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:80px">
    <div class="row">
        <div class="col-6 d-flex justify-content-center">
            <ul>
                <h4 style="margin-left: 65px;font-weight: bolder;">Datos del Cliente</h4>
                <h5 style="margin: 40px;font-weight: 400;">Nombre: <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?></h5>
                <h5 style="margin: 40px;font-weight: 400;">Teléfono: <?php echo htmlspecialchars($_SESSION['cliente_telefono']); ?></h5>
                <h5 style="margin: 40px;font-weight: 400;">Correo: <?php echo htmlspecialchars($_SESSION['cliente_correo']); ?></h5>
            </ul>
        </div>
        <div class="col-6" style="border-left:1px solid rgb(134, 134, 134)">
            <ul>
                <h4 style="margin-left: 65px;font-weight: bolder;">Datos de la Reserva</h4>
                <h5 id="reservaDia" style="margin: 40px; font-weight: 400;">Dia: </h5>
                <h5 id="reservaHora" style="margin: 40px; font-weight: 400;">Hora: </h5>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid" style="height:60px;padding:0px;margin-bottom:120px;margin-top:100px">
    <div class="row">
        <div class="col-4">
            <div style="background-color: black;padding:20px">
                <a href="agendarCita.php" style="color: white;text-decoration:none" class="d-flex justify-content-end"><h5>Atras</h5></a>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div style="background-color: black;padding:20px">
                <a href="reservaConfirmada.php" style="color: white;text-decoration:none"><h5>Confirmar</h5></a>
            </div>
        </div>
    </div>
</div>

<script>
    // Obtener la información del localStorage
    const selectedDate = localStorage.getItem('selectedDate'); // Suponiendo que guardas el día aquí
    const selectedTime = localStorage.getItem('selectedTime');

    // Actualizar el contenido en la página
    document.addEventListener('DOMContentLoaded', function() {
        if (selectedDate && selectedTime) {
            // Usar el día directamente desde localStorage
            const day = selectedDate; // Asumiendo que el día se guarda directamente

            // Mes y año fijos
            const month = 'octubre';
            const year = '2024'; // Cambia esto si el año no es fijo

            // Formatear la hora
            const [startTime, endTime] = selectedTime.split('-'); // Suponiendo que la hora se almacena como "10:00-12:00"

            // Actualizar el contenido
            document.getElementById('reservaDia').innerText = 'Día: ' + day + ' de ' + month + ' de ' + year;
            document.getElementById('reservaHora').innerText = 'Hora: De las ' + startTime + ' Hasta las ' + endTime;
        } else {
            document.getElementById('reservaDia').innerText = 'No se ha seleccionado ningún día.';
            document.getElementById('reservaHora').innerText = 'No se ha seleccionado ninguna hora.';
        }
    });
</script>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
