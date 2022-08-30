
    <?php include("includes/header.php")?>
    <div class="contenido">
        <div class="form">
            <img src="logo.png" alt="">
            <form action="conexion/validar.php" method="POST">
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Contraseña" name="password" id="password" required >
                <button>Iniciar</button>
            </form>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p class='error'>Error en la autentificación</p>
                ";
            }
            if (isset($_GET['sesion']) && $_GET['sesion'] == 1) {
                echo "<p class='sesion'>Sesión cerrada correctamente</p>
                  ";
            }
            ?>
        </div>
    </div>
    <?php include("includes/footer.php")?>
