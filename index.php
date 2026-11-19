<?php
date_default_timezone_set('America/Mexico_City');
session_start();

$sesion_reiniciada = false;

// Si ya existe una sesión activa, se destruye para iniciar una nueva desde cero
if (isset($_SESSION['inicio_sesion'])) {
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
    $sesion_reiniciada = true;
}

// Registro inicial de sesión en memoria utilizando time()
$_SESSION['inicio_sesion'] = time();
$_SESSION['equipo'] = 'Equipo PHP - Unidad 4';
$_SESSION['paginas_visitadas'] = 0;

$titulo_pagina = 'Inicio | Mini Proyecto PHP - Unidad 4';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <h2>Bienvenido al Sistema Demostrativo de PHP (Unidad 4)</h2>
    <p>Este sitio web ejecuta código PHP del lado del servidor sin bases de datos ni archivos externos, utilizando variables en memoria temporal y plantillas modulares mediante <code>require_once</code>.</p>
</section>

<?php if ($sesion_reiniciada): ?>
    <div class="alert alert-success">
        <strong>Sesión reiniciada correctamente:</strong> Se detectó una sesión previa, se ejecutó <code>session_destroy()</code> y se registró una nueva hora inicial con <code>time()</code>.
    </div>
<?php else: ?>
    <div class="alert alert-info">
        <strong>Nueva sesión iniciada:</strong> Se ejecutó <code>session_start()</code> y se almacenó la marca de tiempo inicial en <code>$_SESSION['inicio_sesion']</code>.
    </div>
<?php endif; ?>

<div class="grid-2">
    <article class="card">
        <h3>¿Cómo funciona el inicio de sesión aquí?</h3>
        <p>Al ingresar a <code>index.php</code>, el servidor verifica si ya existe una sesión activa. Si existe, la destruye con <code>session_destroy()</code> y crea una nueva registrando el instante exacto con <code>time()</code>.</p>
        <div class="code-snippet">if (isset($_SESSION['inicio_sesion'])) {
    session_unset();
    session_destroy();
    session_start();
}
$_SESSION['inicio_sesion'] = time();</div>
        <p>Navega por cualquiera de las secciones del menú superior y observa en el encabezado cómo se calcula en tiempo real tu tiempo activo en minutos y segundos.</p>
    </article>

    <article class="card">
        <h3>Mapa de Módulos del Sistema</h3>
        <ul class="styled-list">
            <li><strong>Variables y Tipos (<code>variables.php</code>):</strong> Declaración de <code>string</code>, <code>int</code>, <code>float</code>, <code>boolean</code> y <code>array</code>, uso de <code>echo</code>, <code>date()</code> y <code>count()</code>.</li>
            <li><strong>Condicionales (<code>condicionales.php</code>):</strong> Toma de decisiones reales con <code>if</code>, <code>elseif</code>, <code>else</code> y <code>switch</code>.</li>
            <li><strong>Bucles (<code>bucles.php</code>):</strong> Generación dinámica de tablas y listas con <code>for</code>, <code>while</code> y <code>foreach</code>.</li>
            <li><strong>Arreglos (<code>arreglos.php</code>):</strong> Arreglos indexados, asociativos y multidimensionales con filtros condicionales.</li>
            <li><strong>Sesiones PHP (<code>sesiones.php</code>):</strong> Inspección de variables en memoria <code>$_SESSION</code> y reinicio de sesión.</li>
        </ul>
        <a href="variables.php" class="btn-primary">Comenzar recorrido por Variables &rarr;</a>
    </article>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
