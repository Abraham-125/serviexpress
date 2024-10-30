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

            
            /* Contenedor del calendario */
            .calendar-container {
                display: grid;
                grid-template-columns: repeat(7, 50px); /* 7 columnas para los días de la semana */
                gap: 10px;
            }
    
            /* Estilos para cada día */
            .day {
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: white;
                border: 1px solid #ddd;
                cursor: pointer;
                transition: background-color 0.3s;
            }
    
            /* Día seleccionado */
            .day.selected {
                background-color: black;
                color: white;
            }
            /* Estilo general para los elementos */
            .time-slot {
                font-weight: 400;
                padding: 8px;
                cursor: pointer;
                transition: background-color 0.3s ease;
              }
              
              .time-slot:hover:not(.disabled),
              .time-slot.selected {
                background-color: black;
                color: white;
              }
              
              .disabled {
                background-color: rgb(196, 196, 196);
                color: white;
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
        <div class="col" style="margin:0px; padding:0px; margin-left:60px">
            <h1 style="font-weight:lighter;">Selecciona</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px">
        </div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px">
        </div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px; ">
            <h1 style="font-weight:bolder;"><span style="font-weight: lighter;">el </span>Dia</h1>
        </div>
        <div class="col-5" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <H2 style="margin:100px 0px 10px 510px">OCTUBRE</H2>
    <div class="calendar-container" style="margin-left: 380px;">
        <!-- Generar días del 1 al 31 -->
        <div class="day" onclick="selectDay(this)">1</div>
        <div class="day" onclick="selectDay(this)">2</div>
        <div class="day" onclick="selectDay(this)">3</div>
        <div class="day" onclick="selectDay(this)">4</div>
        <div class="day" onclick="selectDay(this)">5</div>
        <div class="day" onclick="selectDay(this)">6</div>
        <div class="day" onclick="selectDay(this)">7</div>
        <div class="day" onclick="selectDay(this)">8</div>
        <div class="day" onclick="selectDay(this)">9</div>
        <div class="day" onclick="selectDay(this)">10</div>
        <div class="day" onclick="selectDay(this)">11</div>
        <div class="day" onclick="selectDay(this)">12</div>
        <div class="day" onclick="selectDay(this)">13</div>
        <div class="day" onclick="selectDay(this)">14</div>
        <div class="day" onclick="selectDay(this)">15</div>
        <div class="day" onclick="selectDay(this)">16</div>
        <div class="day" onclick="selectDay(this)">17</div>
        <div class="day" onclick="selectDay(this)">18</div>
        <div class="day" onclick="selectDay(this)">19</div>
        <div class="day" onclick="selectDay(this)">20</div>
        <div class="day" onclick="selectDay(this)">21</div>
        <div class="day" onclick="selectDay(this)">22</div>
        <div class="day" onclick="selectDay(this)">23</div>
        <div class="day" onclick="selectDay(this)">24</div>
        <div class="day" onclick="selectDay(this)">25</div>
        <div class="day" onclick="selectDay(this)">26</div>
        <div class="day" onclick="selectDay(this)">27</div>
        <div class="day" onclick="selectDay(this)">28</div>
        <div class="day" onclick="selectDay(this)">29</div>
        <div class="day" onclick="selectDay(this)">30</div>
        <div class="day" onclick="selectDay(this)">31</div>
    </div>
    
    
</div>


</div>

<!-- Contenido principal -->
<div class="container-fluid" style="margin:0px; padding:0px; margin-top:110px">
    <div class="row">
        <div class="col-4" style="margin:0px; padding:0px">
            
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(0% 0%, 90% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
        <div class="col" style="margin:0px; padding:0px; margin-left:60px">
            <h1 style="font-weight:lighter;">Selecciona</h1>
        </div>
        <div class="col" style="margin:0px; padding:0px">
        </div>
    </div>
    <div class="row" style="margin:0px; padding:0px">
        <div class="col-4" style="margin:0px; padding:0px">
        </div>
        <div class="col justify-content-center d-flex" style="margin:0px; padding:0px; ">
            <h1 style="font-weight:bolder;"><span style="font-weight: lighter;">la </span>Hora</h1>
        </div>
        <div class="col-5" style="margin:0px; padding:0px">
            <div style="background-color: black;height:60%;width:100%;margin:0px;clip-path: polygon(10% 0%, 100% 0%, 100% 100%, 0% 100%);margin-top:20px"></div>
        </div>
    </div>
</div>


<div class="container" style="margin-top:80px">
    <div class="row">
      <div class="col">
        <ul style="margin-left:380px;width:380px">
          <h4 class="time-slot" data-time="08:00-10:00">De las 08:00 Hasta las 10:00</h4>
          <h4 class="time-slot" data-time="10:00-12:00">De las 10:00 Hasta las 12:00</h4>
          <h4 class="time-slot" data-time="12:00-14:00">De las 12:00 Hasta las 14:00</h4>
          <h4 class="time-slot" data-time="15:00-17:00">De las 15:00 Hasta las 17:00</h4>
          <h4 class="time-slot disabled" data-time="17:00-19:00" style="pointer-events: none;">De las 17:00 Hasta las 19:00</h4>
        </ul>
      </div>
    </div>
  </div>
  
  <form id="timeForm" style="display: none;">
    <input type="text" id="selectedTime" name="selectedTime">
    <button type="submit">Enviar</button>
  </form>


<div class="container-fluid" style="background-color: black; height:60px;padding:10px;margin-bottom:120px;margin-top:80px">
    <a class="" href="datosReserva.php" style="text-decoration: none;"><h4 style="color: white;margin-left:570px">Siguiente</h4></a>
</div>


<script>
// Selecciona todos los elementos con la clase 'time-slot'
const timeSlots = document.querySelectorAll('.time-slot');

// Variable para almacenar el horario seleccionado
let selectedSlot = null;

timeSlots.forEach(slot => {
  slot.addEventListener('click', function () {
    // Verifica que el elemento no esté deshabilitado
    if (!slot.classList.contains('disabled')) {
      // Si hay un horario previamente seleccionado, le quitamos la clase 'selected'
      if (selectedSlot) {
        selectedSlot.classList.remove('selected');
      }

      // Añade la clase 'selected' al nuevo elemento clickeado
      slot.classList.add('selected');
      selectedSlot = slot;

      // Guarda el valor en el input del formulario sin recargar la página
      document.getElementById('selectedTime').value = slot.dataset.time;
    }
  });
});

</script>

<script>
    // Función para manejar la selección de días
    function selectDay(element) {
        // Remover la clase 'selected' de cualquier día previamente seleccionado
        const days = document.querySelectorAll('.day');
        days.forEach(day => day.classList.remove('selected'));

        // Agregar la clase 'selected' al día seleccionado
        element.classList.add('selected');
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Almacenar la fecha y hora seleccionadas en localStorage al hacer clic en el botón "Siguiente"
document.querySelector('.container-fluid a[href="datosReserva.php"]').addEventListener('click', function(event) {
    const selectedDay = document.querySelector('.day.selected');
    const selectedTimeSlot = document.querySelector('.time-slot.selected');

    if (selectedDay && selectedTimeSlot) {
        const date = selectedDay.innerText;
        const time = selectedTimeSlot.dataset.time;

        localStorage.setItem('selectedDate', date);
        localStorage.setItem('selectedTime', time);
        localStorage.setItem('selectedDay', date); // Asegúrate de almacenar el día seleccionado
    } else {
        alert("Por favor, selecciona una fecha y una hora.");
        event.preventDefault(); // Evita la redirección si no hay selección
    }
});
</script>
</body>
</html>
