<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos</title>
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

            <div class="login">
                <button onclick="loginAnimation()" class="loginbtn"><img src="assets/images/user_icon.png" alt="">
                    <h2>INICIAR SESION</h2>
                </button>
                <div id="form_login" class="login_content">
                    <h2>Iniciar Sesión</h2>
                    <form method="post" action="backend/iniciarSesion.php">
                        <hr>
                        <?php
                        if (isset($_GET['error'])) {
                            ?>
                            <p class="error">
                                <?php
                                echo $_GET['error']
                                    ?>
                            </p>
                            <?php
                        }
                        ?>
                        <hr>
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
        <div class="container-capt">
            <div class="texto-capt">
                <h2>Completa este formulario y duplica tus ingresos!!</h2>
            </div>
            <div class="container_btn1">
                <a href="form_entrevista.php" class="btn form_btn" target="_blank">
                    Conviértete en Modelo
                </a>
            </div>
        </div>
        <section>
            <div class="gallery-container">
                <div class="navigation-buttons">
                    <button id="prevBtn"><img src="assets/images/left.png" width="100px"></button>
                </div>
                <div class="image-container">
                    <img src="assets/images/model1.jpg" alt="Imagen 1">
                    <img src="assets/images/model2.jpg" alt="Imagen 2">
                    <img src="assets/images/model3.jpg" alt="Imagen 3">
                    <img src="assets/images/model4.jpg" alt="Imagen 4">
                </div>

                <div class="navigation-buttons">
                    <button id="nextBtn"><img src="assets/images/right.png" width="100px"></button>
                </div>
            </div>
        </section>
        <section>
            <div class="content_location">
                <div class="iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.0052124224022!2d-75.6905427002733!3d4.805514266936095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3887407fea68f9%3A0xa63309638e4fe32!2sPortal%20de%20Pinares!5e0!3m2!1ses!2sco!4v1710161374441!5m2!1ses!2sco"
                        width="800" height="710" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="photo">
                    <img src="assets/images/photo_ph.jpg" alt="ph">
                </div>
            </div>
        </section>
        <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>
    </section>
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

    <script src="backend/auto_scroll.js"></script>
    <script src="backend/menu.js"></script>
    <script src="backend/galeria.js"></script>
</body>

</html>