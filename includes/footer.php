</main>

<footer class="site-footer">
    <p><strong>Mini Proyecto 1 – Unidad 4: Programación del lado del servidor con PHP</strong></p>
    <p>Equipo: Axel Nuricumbo Jiménez &bull; Diego Brindis Guizar &bull; Santiago Salazar Trinidad</p>
    <p>Programación Web &bull; <?php echo date('Y'); ?></p>
</footer>
<script>
setInterval(() => {
    const elTiempo = document.getElementById('tiempo-activo');
    const elReloj = document.getElementById('reloj-actual');
    if (!elTiempo || !elReloj) return;

    const inicio = parseInt(elTiempo.dataset.inicio, 10);
    const ahora = Math.floor(Date.now() / 1000);
    const diff = Math.max(0, ahora - inicio);

    elTiempo.textContent = `${Math.floor(diff / 60)} minutos ${diff % 60} segundos`;
    elReloj.textContent = new Date().toTimeString().split(' ')[0];
}, 1000);
</script>
</body>
</html>
