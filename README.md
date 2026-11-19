# Mini Proyecto 1 – Unidad 4: Desarrollo Web con PHP

Sitio web dinámico desarrollado en PHP del lado del servidor para demostrar el uso práctico de variables, tipos de datos, estructuras de control, arreglos y manejo de sesiones en memoria temporal.

## Información Académica
* **Asignatura:** Programación Web
* **Unidad:** Unidad 4 – Programación del lado del servidor con PHP
* **Institución:** Instituto Tecnológico de Tuxtla Gutiérrez (TecNM)
* **Repositorio:** https://github.com/alanbryto/mini-proyecto-php-u4

## Integrantes del Equipo
1. **Axel Nuricumbo Jiménez** (`@alanbryto`) – Arquitectura base, CSS, plantillas `includes/` y módulo de sesiones (`index.php`, `sesiones.php`).
2. **Diego Brindis Guizar** – Módulo de variables, tipos de datos y estructuras condicionales (`variables.php`, `condicionales.php`).
3. **Santiago Salazar Trinidad** – Módulo de estructuras repetitivas, arreglos multidimensiones y documentación (`bucles.php`, `arreglos.php`, `README.md`).

## Temas PHP Implementados
* **Modularización de plantillas:** Uso de `require_once` para compartir encabezado (`header.php`), menú (`menu.php`) y pie de página (`footer.php`).
* **Variables y tipos de datos (`variables.php`):** Declaración e impresión con `echo` de tipos `string`, `int`, `float`, `boolean` y `array`, junto con funciones nativas `date()` y `count()`.
* **Estructuras de control (`condicionales.php`):** Evaluación en tiempo real con `if`, `elseif`, `else` y `switch` sobre variables y arreglos.
* **Bucles (`bucles.php`):** Generación dinámica de tablas y listas HTML utilizando `for`, `while` y `foreach`.
* **Arreglos (`arreglos.php`):** Manipulación de arreglos indexados, asociativos y multidimensionales recorridos con `foreach` y condicionales internos.
* **Manejo de sesiones (`index.php` y `sesiones.php`):** Control de estado temporal en memoria con `session_start()`, `$_SESSION`, `time()`, cálculo de tiempo activo en minutos/segundos y reinicio mediante `session_destroy()`.
