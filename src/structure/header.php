<header class="bg-dark text-white text-center py-5">
    <h1 class="display-4">Listado Alumnos/as 2DAW</h1>
    <?php
    if(isset($_SESSION['username'])) {
        echo '🟢 Usuario conectado: ' . $_SESSION['username'];
        echo '<br>';
        echo "<a href='../logout.php'>Logout</a>";
    } else {
        echo '🔴 Usuario desconectado';
        echo '<br>';
        echo "<a href='../login.php'>Login</a>";
    }
    ?>
</header>
