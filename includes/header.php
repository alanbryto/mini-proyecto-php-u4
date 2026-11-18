<?php
date_default_timezone_set('America/Mexico_City');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Respaldo por si se accede directamente a una subpágina sin haber pasado por index.php
if (!isset($_SESSION['inicio_sesion'])) {
    $_SESSION['inicio_sesion'] = time();
}

$_SESSION['paginas_visitadas'] = ($_SESSION['paginas_visitadas'] ?? 0) + 1;

$hora_inicio_ts = $_SESSION['inicio_sesion'];
$hora_actual_ts = time();
$tiempo_activo_seg = max(0, $hora_actual_ts - $hora_inicio_ts);

$minutos_activos = intdiv($tiempo_activo_seg, 60);
$segundos_activos = $tiempo_activo_seg % 60;

$hora_inicio_str = date('H:i:s', $hora_inicio_ts);
$hora_actual_str = date('H:i:s', $hora_actual_ts);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo_pagina ?? 'Mini Proyecto PHP - Unidad 4'); ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header class="site-header">
    <div class="header-inner">
        <div class="brand">
            <img src="img/php-badge.svg" alt="PHP 8 Logo">
            <div>
                <h1>Programación Web – Unidad 4 (PHP)</h1>
                <p>Variables, Estructuras de Control, Arreglos y Sesiones en Memoria</p>
            </div>
        </div>

        <div class="session-panel" aria-label="Información de sesión activa">
            <div class="session-metrics">
                <span>Hora inicio sesión: <strong><?php echo $hora_inicio_str; ?></strong></span>
                <span>Hora actual: <strong id="reloj-actual"><?php echo $hora_actual_str; ?></strong></span>
                <span>Tiempo activo: <strong id="tiempo-activo" data-inicio="<?php echo $hora_inicio_ts; ?>"><?php echo $minutos_activos . ' minutos ' . $segundos_activos . ' segundos'; ?></strong></span>
            </div>
            <a href="index.php" class="btn-reset" title="Destruir sesión actual e iniciar una nueva">Reiniciar sesión</a>
        </div>
    </div>
</header>

<?php require_once __DIR__ . '/menu.php'; ?>

<main class="container">
