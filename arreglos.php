<?php
$titulo_pagina = 'Arreglos en PHP | PHP U4';
require_once __DIR__ . '/includes/header.php';

// 1. Arreglo indexado
$stackTecnologico = ["HTML5", "CSS3", "PHP 8", "Git", "GitHub", "InfinityFree"];

// 2. Arreglo asociativo
$fichaProyecto = [
    "Materia" => "Programación Web",
    "Unidad" => "Unidad 4 – PHP del lado del servidor",
    "Repositorio" => "github.com/alanbryto",
    "Almacenamiento" => "Memoria temporal ($_SESSION)",
    "Base de datos" => "No requerida"
];

// 3. Arreglo multidimensional
$equipoDesarrollo = [
    [
        "nombre" => "Axel Nuricumbo Jiménez",
        "rol" => "Arquitectura, CSS y Sesiones",
        "commits" => 2,
        "calificacion" => 98
    ],
    [
        "nombre" => "Diego Brindis Guizar",
        "rol" => "Variables y Condicionales",
        "commits" => 2,
        "calificacion" => 95
    ],
    [
        "nombre" => "Santiago Salazar Trinidad",
        "rol" => "Bucles, Arreglos y Documentación",
        "commits" => 2,
        "calificacion" => 88
    ]
];
?>

<section class="page-intro">
    <h2>Manipulación de Arreglos en PHP</h2>
    <p>Los arreglos permiten estructurar colecciones de datos indexadas, asociativas por clave-valor o matrices multidimensionales.</p>
</section>

<div class="grid-2">
    <article class="card">
        <h3>1. Arreglo Indexado</h3>
        <p>Elementos accesibles mediante índice numérico automático (<code>0</code> a <code><?php echo count($stackTecnologico) - 1; ?></code>):</p>
        <div class="output-box">
            <ul class="styled-list">
                <?php foreach ($stackTecnologico as $idx => $herramienta): ?>
                    <li>Índice <code>[<?php echo $idx; ?>]</code> &rarr; <strong><?php echo $herramienta; ?></strong></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </article>

    <article class="card">
        <h3>2. Arreglo Asociativo</h3>
        <p>Elementos identificados mediante claves textuales descriptivas:</p>
        <div class="output-box">
            <table>
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fichaProyecto as $clave => $valor): ?>
                        <tr>
                            <td><strong><?php echo $clave; ?></strong></td>
                            <td><?php echo $valor; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
</div>

<article class="card">
    <h3>3. Arreglo Multidimensional con <code>foreach</code> y Condicionales Internos</h3>
    <p>Recorre la matriz <code>$equipoDesarrollo</code> y evalúa dentro del ciclo el desempeño de cada integrante mediante <code>if / elseif / else</code>:</p>

    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Integrante</th>
                    <th>Módulo asignado</th>
                    <th>Commits</th>
                    <th>Puntaje</th>
                    <th>Evaluación (Condicional interno)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipoDesarrollo as $miembro): ?>
                    <tr>
                        <td><strong><?php echo $miembro['nombre']; ?></strong></td>
                        <td><?php echo $miembro['rol']; ?></td>
                        <td><?php echo $miembro['commits']; ?></td>
                        <td><?php echo $miembro['calificacion']; ?> / 100</td>
                        <td>
                            <?php
                            if ($miembro['calificacion'] >= 95) {
                                echo '<span class="badge badge-success">Destacado</span>';
                            } elseif ($miembro['calificacion'] >= 85) {
                                echo '<span class="badge badge-warn">Satisfactorio</span>';
                            } else {
                                echo '<span class="badge badge-danger">En revisión</span>';
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</article>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
