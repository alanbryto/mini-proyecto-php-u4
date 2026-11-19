<?php
$titulo_pagina = 'Bucles y Ciclos | PHP U4';
require_once __DIR__ . '/includes/header.php';

$temasUnidad4 = [
    "Sintaxis básica y etiquetas PHP",
    "Variables y tipado dinámico",
    "Estructuras condicionales if y switch",
    "Ciclos repetitivos for, while y foreach",
    "Arreglos indexados, asociativos y multidimensionales",
    "Persistencia en memoria con $_SESSION"
];
?>

<section class="page-intro">
    <h2>Estructuras Repetitivas (<code>for</code>, <code>while</code>, <code>foreach</code>)</h2>
    <p>Los bucles permiten iterar sobre conjuntos de datos reales para construir listas y tablas HTML dinámicamente sin repetir código manual.</p>
</section>

<div class="grid-2">
    <article class="card">
        <h3>1. Ciclo <code>for</code> (Tabla dinámica de métricas)</h3>
        <p>Genera una tabla calculando el crecimiento exponencial de peticiones por segundo ($2^n$) en 6 iteraciones:</p>
        <div class="output-box">
            <table>
                <thead>
                    <tr>
                        <th>Iteración (<code>$i</code>)</th>
                        <th>Operación</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <tr>
                            <td>Ciclo #<?php echo $i; ?></td>
                            <td><code>2 ^ <?php echo $i; ?></code></td>
                            <td><strong><?php echo pow(2, $i); ?></strong> req/s</td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </article>

    <article class="card">
        <h3>2. Ciclo <code>while</code> (Simulación de memoria disponible)</h3>
        <p>Reduce bloques de memoria asignados de 128 MB hasta agotar los 512 MB iniciales:</p>
        <div class="output-box">
            <ul class="styled-list">
                <?php
                $memoriaMB = 512;
                $paso = 1;
                while ($memoriaMB > 0) {
                    echo "<li><strong>Paso {$paso}:</strong> Memoria restante en buffer = {$memoriaMB} MB</li>";
                    $memoriaMB -= 128;
                    $paso++;
                }
                echo "<li><strong>Finalizado:</strong> Buffer liberado (0 MB disponibles).</li>";
                ?>
            </ul>
        </div>
    </article>
</div>

<article class="card">
    <h3>3. Ciclo <code>foreach</code> (Recorrido de arreglo de contenidos)</h3>
    <p>Recorre el arreglo real <code>$temasUnidad4</code> (<?php echo count($temasUnidad4); ?> elementos) mostrando su índice y contenido:</p>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tema de la Unidad 4</th>
                    <th>Longitud (<code>strlen</code>)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($temasUnidad4 as $indice => $tema): ?>
                    <tr>
                        <td><?php echo $indice + 1; ?></td>
                        <td><?php echo $tema; ?></td>
                        <td><?php echo mb_strlen($tema); ?> caracteres</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</article>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
