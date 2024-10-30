<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Inicia la sesión solo si no está activa
}
?><!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px rgb(184, 184, 184) solid;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="icono.png" alt="Icono" width="40" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php" style="font-weight: bold;">Inicio</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['usuario_nombre'])): ?> <!-- Cambiado a $_SESSION['usuario_nombre'] -->
                        <a class="nav-link text-muted" href="agendarCita.php">Agendar Cita</a>
                    <?php else: ?>
                        <a class="nav-link text-muted" href="#" style="pointer-events: none; color: grey;" title="Inicia sesión para agendar citas">Agendar Cita</a>
                    <?php endif; ?>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['usuario_nombre'])): ?> <!-- Cambiado a $_SESSION['usuario_nombre'] -->
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php" style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cerrar_sesion.php" style="border-left:1px solid rgb(148, 148, 148);font-weight: bold;">Cerrar Sesión</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="iniciarsesion.php" style="font-weight: bold;">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php" style="border-left:1px solid rgb(148, 148, 148);font-weight: bold;">Registrarse</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
