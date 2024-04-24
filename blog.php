<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" href="assets/images/solo_logo.png" type="image/x-icon">
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

            <!-- <div class="login">
                <button onclick="loginAnimation()" class="loginbtn"><img src="assets/images/user_icon.png" alt="">
                    <h2>INICIAR SESION</h2>
                </button>
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
            </div> -->
        </div>
    </header>
    <section>
        <div class="blog">
            <h2>Blog</h2>
            <section>
                <div>
                    <a href="blog/dic_webcam.html"><img src="assets/images/vista.png" width="450px" height="300px"> <br>
                        Diccionario
                        Webcam</a>
                </div>
                <div>
                    <a href="blog/def_webcam.html" target="_blank"><img src="assets/images/model1.png"
                    width="450px" height="300px">
                        <br>¿Qué es el WebCam?</a>
                </div>
                <div>
                    <a href="blog/tokens.html" target="_blank"><img src="assets/images/model1.png"
                    width="450px" height="300px">
                        <br>¿Como Funcionan los Tokens?</a>
                </div>
            </section>
            <section>
                <div>
                    <a href="blog/manejo_cam.html" target="_blank"><img
                            src="assets/images/model1.png" width="450px" height="300px">
                        <br>Manejo de Cámara</a>
                </div>
                <div>
                    <a href="blog/juguetes.html" target="_blank"><img src="assets/images/model1.png"
                    width="450px" height="300px">
                        <br>Juguetes Sexuales</a>
                </div>
                <div>
                    <a href="blog/comunicacion.html" target="_blank"><img
                    src="assets/images/model1.png" width="450px" height="300px">
                        <br>Comunicación Webcam</a>
                </div>
            </section>
            <section>
                <div>
                    <a href="blog/ganar_mas.html" target="_blank"><img src="assets/images/model1.png"
                    width="450px" height="300px"> <br> ¿Como Ganar
                        Más?</a>
                </div>
            </section>
        </div>

        <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>
    </section>
    <script src="backend/menu.js"></script>
    <script src="backend/auto_scroll.js"></script>

    <footer>
        <section class="footer">
            <section class="address">
                <div>
                    <a href="https://maps.app.goo.gl/86CXt8iysk9zBHs46" class="location" target="_blank">
                        <img src="assets/images/map_location.png" id="location" style="width: 50px;">
                        <p>Portal de Pinares, Pereira, Risaralda.</p>
                    </a>
                </div>
            </section>
            <section class="contact">
                <a href="https://wa.me/573225717563">Contáctanos
                    <div>
                        <img src="assets/images/icon_call.png" style="width: 40px; height: 40px;">
                        <p style="font-size: 20px;">3235105386</p>
                    </div>
                </a>

            </section>
            <section class="copyright">
                <p>Cada modelo que aparece en esta web, es mayor de 18 años.</p>
                <p>© 2024 JP Media Group.</p>
            </section>
        </section>
        <div class="banner_redes">
            <a href="https://wa.me/573225717563" target="_blank"><img src="assets/images/whatsapp-logo.png" alt=""></a>
            <a href="https://www.facebook.com/jpmediagroupa/" target="_blank"><img src="assets/images/facebook.png"></a>
            <a href="https://www.instagram.com/jpmediagroup_02/" target="_blank"><img
                    src="assets/images/instagram.png"></a>
            <a href="mailto:admon.jpmedia@gmail.com" target="_blank"><img src="assets/images/gmail.png"></a>
        </div>
    </footer>
</body>

</html>