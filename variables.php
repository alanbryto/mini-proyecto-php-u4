<?php
$titulo_pagina = 'Variables y Tipos de Datos | PHP U4';
require_once __DIR__ . '/includes/header.php';

// Declaración de variables de los 5 tipos obligatorios
$asignatura = "Programación Web";                 // string
$unidad = 4;                                       // int
$promedioEquipo = 9.75;                            // float
$servidorEnLinea = true;                           // boolean
$integrantes = [                                   // array
    "Axel Nuricumbo Jiménez",
    "Diego Brindis Guizar",
    "Santiago Salazar Trinidad"
];

// Uso de funciones nativas date() y count()
$fechaServidor = date("d/m/Y H:i:s");
$totalIntegrantes = count($integrantes);
?>

<section class="page-intro">
    <h2>Variables y Tipos de Datos en PHP</h2>
    <p>En PHP las variables comienzan con el signo <code>$</code> y utilizan tipado dinámico: el intérprete determina automáticamente el tipo según el valor asignado en tiempo de ejecución.</p>
</section>

<article class="card">
    <h3>1. Declaración e Impresión de los 5 Tipos de Datos (<code>echo</code>)</h3>
    <p>A continuación se declaran y muestran en pantalla variables de tipo <code>string</code>, <code>int</code>, <code>float</code>, <code>boolean</code> y <code>array</code>:</p>

    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Variable</th>
                    <th>Tipo de dato (<code>gettype</code>)</th>
                    <th>Valor mostrado con <code>echo</code></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$asignatura</code></td>
                    <td><strong><?php echo gettype($asignatura); ?></strong></td>
                    <td><?php echo $asignatura; ?></td>
                </tr>
                <tr>
                    <td><code>$unidad</code></td>
                    <td><strong><?php echo gettype($unidad); ?></strong></td>
                    <td><?php echo $unidad; ?></td>
                </tr>
                <tr>
                    <td><code>$promedioEquipo</code></td>
                    <td><strong><?php echo gettype($promedioEquipo); ?></strong></td>
                    <td><?php echo $promedioEquipo; ?></td>
                </tr>
                <tr>
                    <td><code>$servidorEnLinea</code></td>
                    <td><strong><?php echo gettype($servidorEnLinea); ?></strong></td>
                    <td><?php echo $servidorEnLinea ? 'true (1 - Activo)' : 'false (0 - Inactivo)'; ?></td>
                </tr>
                <tr>
                    <td><code>$integrantes</code></td>
                    <td><strong><?php echo gettype($integrantes); ?></strong></td>
                    <td><?php echo implode(" | ", $integrantes); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

<div class="grid-2">
    <article class="card">
        <h3>2. Uso de la función <code>date()</code></h3>
        <p>La función <code>date()</code> formatea la fecha y hora local del servidor web en tiempo real.</p>
        <div class="code-snippet">$fechaServidor = date("d/m/Y H:i:s");
echo $fechaServidor;</div>
        <div class="output-box">
            <strong>Resultado ejecutado:</strong> <?php echo $fechaServidor; ?>
        </div>
    </article>

    <article class="card">
        <h3>3. Uso de la función <code>count()</code></h3>
        <p>La función <code>count()</code> contabiliza el número exacto de elementos almacenados dentro de un arreglo.</p>
        <div class="code-snippet">$totalIntegrantes = count($integrantes);
echo $totalIntegrantes;</div>
        <div class="output-box">
            <strong>Total de integrantes registrados:</strong> <?php echo $totalIntegrantes; ?> estudiantes.
        </div>
    </article>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
