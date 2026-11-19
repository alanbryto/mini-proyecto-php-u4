<?php
$titulo_pagina = 'Manejo de Sesiones | PHP U4';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <h2>Manejo de Sesiones en PHP (<code>session_start()</code> y <code>$_SESSION</code>)</h2>
    <p>HTTP es un protocolo sin estado; las sesiones en PHP permiten conservar información temporal en la memoria del servidor mientras el usuario navega entre distintas páginas.</p>
</section>

<div class="grid-2">
    <article class="card">
        <h3>1. Estado Actual en Memoria (<code>$_SESSION</code>)</h3>
        <p>Valores almacenados actualmente en el arreglo superglobal <code>$_SESSION</code> para tu navegador:</p>
        <div class="output-box">
            <table>
                <thead>
                    <tr>
                        <th>Parámetro</th>
                        <th>Valor en Servidor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>session_id()</code></td>
                        <td><code><?php echo session_id(); ?></code></td>
                    </tr>
                    <tr>
                        <td><code>$_SESSION['inicio_sesion']</code></td>
                        <td><?php echo $_SESSION['inicio_sesion']; ?> (<?php echo $hora_inicio_str; ?>)</td>
                    </tr>
                    <tr>
                        <td><code>time()</code> actual</td>
                        <td><?php echo $hora_actual_ts; ?> (<?php echo $hora_actual_str; ?>)</td>
                    </tr>
                    <tr>
                        <td>Tiempo activo calculado</td>
                        <td><strong><?php echo $minutos_activos . ' minutos ' . $segundos_activos . ' segundos'; ?></strong></td>
                    </tr>
                    <tr>
                        <td><code>$_SESSION['paginas_visitadas']</code></td>
                        <td><?php echo $_SESSION['paginas_visitadas']; ?> vistas en esta sesión</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

    <article class="card">
        <h3>2. Cálculo de Tiempo y Destrucción de Sesión</h3>
        <p>El tiempo activo mostrado en el encabezado de todas las páginas se calcula restando la marca Unix inicial a la actual:</p>
        <div class="code-snippet">$segundos_totales = time() - $_SESSION['inicio_sesion'];
$minutos  = intdiv($segundos_totales, 60);
$segundos = $segundos_totales % 60;</div>
        <p>Al pulsar el botón de reinicio, el sistema redirige a <code>index.php</code>, donde se ejecuta <code>session_destroy()</code> para eliminar los datos previos y generar un nuevo contador desde cero.</p>
        <a href="index.php" class="btn-primary">Reiniciar sesión en index.php (session_destroy)</a>
    </article>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
