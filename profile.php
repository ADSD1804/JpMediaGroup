<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<header>
        <div class="banner_redes">
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
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
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
    <section>
        <h1>Bienvenido Usuario</h1>

        <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>   
    </section>
    
    <script src="backend/auto_scroll.js"></script>
    <script src="backend/menu.js"></script>
</body>
</html>