<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="assets/styles.css">

</head>

<body>
    <header>
        <div class="banner_redes">
            <a href="https://wa.me/573225717563" target="_blank"><img src="assets/images/whatsapp-logo.png" alt=""></a>
            <a href="https://www.facebook.com/jpmediagroupa/" target="_blank"><img src="assets/images/facebook.png"></a>
            <a href="https://www.instagram.com/jpmediagroup_02/" target="_blank"><img
                    src="assets/images/instagram.png"></a>
            <a href="mailto:admon.jpmedia@gmail.com" target="_blank"><img src="assets/images/gmail.png"></a>
        </div>

        <div class="menu_container">
            <div class="logo-container">
                <a href="inicio.php"><img src="assets/images/LOGO.png" alt="logo_JP"></a>
            </div>

            <div class="dropdown-content">
                <div><a href="inicio.php">Inicio</a></div>
                <div><a href="modelos.php">Modelos</a></div>
                <div><a href="blog.php">Blog</a></div>
            </div>

            <div class="login">
                <button onclick="loginAnimation()" class="loginbtn"><img src="assets/images/user_icon.png"
                        alt=""></button>
                <div id="form_login" class="login_content">
                    <h2>Iniciar Sesión</h2>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <input type="email" id="email" name="email" placeholder="Correo" required><br>
                        <input type="password" id="contrasenia" name="contrasenia" placeholder="Contraseña"
                            required><br>
                        <button type="submit">Enviar</button>
                        <button type="reset">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="table_users">

        <?php
        include ("backend/database.php");
        ?>
        <h1>Usuarios</h1>
        <table>
            <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Contraseña</td>
                <td>Cargo</td>
            </tr>

            <?php
            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($connect, $sql);

            while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $mostrar['nombre'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['email'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['contraseña'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['id_cargo'] ?>
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>

        <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>
    </section>
    <script src="backend/auto_scroll.js"></script>
    <script href="backend/menu.js"></script>
</body>

</html>