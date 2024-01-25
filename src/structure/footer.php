<footer class="bg-dark text-white p-3">
    <p>Madirex</p>
    <p>2º DAW</p>
    <?php
    if(isset($_SESSION['username'])) {
        if(isset($_SESSION['visits'])) {
            $_SESSION['visits']++;
        } else {
            $_SESSION['visits'] = 1;
        }
        echo "Visitas durante esta sesión: " . $_SESSION['visits'];
    }
    ?>
</footer>
