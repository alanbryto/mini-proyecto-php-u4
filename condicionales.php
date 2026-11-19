<?php
$titulo_pagina = 'Estructuras Condicionales | PHP U4';
require_once __DIR__ . '/includes/header.php';

// Datos reales evaluados por las estructuras de control
$evaluacionProyecto = [
    "equipo" => "Equipo PHP U4",
    "calificacion" => 94,
    "entregadoATiempo" => true
];

$numeroDia = (int) date('N'); // 1 (Lunes) a 7 (Domingo)
?>

<section class="page-intro">
    <h2>Estructuras de Control Condicionales (<code>if</code>, <code>elseif</code>, <code>else</code>, <code>switch</code>)</h2>
    <p>Permiten bifurcar el flujo de ejecución del programa en el servidor evaluando expresiones lógicas sobre variables y arreglos.</p>
</section>

<div class="grid-2">
    <article class="card">
        <h3>1. Evaluación con <code>if</code>, <code>elseif</code> y <code>else</code></h3>
        <p>Se evalúa la calificación almacenada en <code>$evaluacionProyecto['calificacion']</code> (<strong><?php echo $evaluacionProyecto['calificacion']; ?> pts</strong>) y el tiempo activo de tu sesión actual (<strong><?php echo $tiempo_activo_seg; ?> s</strong>):</p>

        <div class="output-box">
            <?php
            $nota = $evaluacionProyecto['calificacion'];

            if ($nota >= 90 && $evaluacionProyecto['entregadoATiempo']) {
                echo '<p><span class="badge badge-success">Excelente (Acreditado)</span> El proyecto obtuvo ' . $nota . ' puntos y cumplió con la entrega puntual.</p>';
            } elseif ($nota >= 70) {
                echo '<p><span class="badge badge-warn">Aprobado</span> El proyecto obtuvo ' . $nota . ' puntos.</p>';
            } else {
                echo '<p><span class="badge badge-danger">No acreditado</span> Se requiere segunda oportunidad.</p>';
            }

            echo '<hr style="margin: 0.75rem 0; border: 0; border-top: 1px solid #cbd5e1;">';

            if ($tiempo_activo_seg < 30) {
                echo '<p><strong>Estado de lectura:</strong> Acabas de iniciar la sesión hace menos de 30 segundos.</p>';
            } elseif ($tiempo_activo_seg < 180) {
                echo '<p><strong>Estado de lectura:</strong> Llevas una navegación activa moderada (' . $minutos_activos . ' min ' . $segundos_activos . ' s).</p>';
            } else {
                echo '<p><strong>Estado de lectura:</strong> Sesión prolongada de revisión técnica.</p>';
            }
            ?>
        </div>
    </article>

    <article class="card">
        <h3>2. Selección múltiple con <code>switch</code></h3>
        <p>Se evalúa el número de día actual obtenido con <code>date('N')</code> (valor actual: <strong><?php echo $numeroDia; ?></strong>) para determinar la actividad de laboratorio:</p>

        <div class="output-box">
            <?php
            switch ($numeroDia) {
                case 1:
                    $diaNombre = "Lunes";
                    $actividad = "Diseño de arquitectura y estructura de carpetas PHP.";
                    break;
                case 2:
                    $diaNombre = "Martes";
                    $actividad = "Implementación de variables, tipos de datos y condicionales.";
                    break;
                case 3:
                    $diaNombre = "Miércoles";
                    $actividad = "Desarrollo de ciclos for, while y foreach.";
                    break;
                case 4:
                    $diaNombre = "Jueves";
                    $actividad = "Programación de arreglos multidimensionales y control de sesiones.";
                    break;
                case 5:
                    $diaNombre = "Viernes";
                    $actividad = "Pruebas de despliegue en servidor remoto InfinityFree.";
                    break;
                default:
                    $diaNombre = "Fin de semana";
                    $actividad = "Revisión de repositorio GitHub y documentación técnica.";
                    break;
            }

            echo "<p><strong>Día detectado por el servidor:</strong> {$diaNombre}</p>";
            echo "<p><strong>Actividad programada:</strong> {$actividad}</p>";
            ?>
        </div>
    </article>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
