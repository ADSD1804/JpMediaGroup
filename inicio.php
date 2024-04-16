<?php
require "./backend/database.php";

if ($_POST) {

    $email = $_POST["email"];
    $password = $_POST["contrasenia"];

    $sql = "SELECT nombre FROM usuarios WHERE email = '$email' ";
    $result = $connect->query($sql);
    $num = $result->num_rows;

    if ($num > 0) {

        $row = $result->fetch_assoc();
        $password_bd = $row["contraseña"];

        $password_c = sha1($password);

        if ($password_bd == $password_c) {

            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id_cargo'] = $row['id_cargo'];

            header('Location: profile.php');

        } else {
            echo "La contraseña no coincide.";
        }
    } else {
        echo "No existe el correo ingresado";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JP Media Group</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" href="assets/images/solo_logo.png" type="image/x-icon">
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

            <!-- <div class="login">
                <button onclick="loginAnimation()" class="loginbtn"><img src="assets/images/user_icon.png"
                        alt=""><h2>INICIAR SESION</h2></button>
                <div id="form_login" class="login_content">
                    <h2>Iniciar Sesión</h2>
                    <form method="post" action="">
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
        <div class="background_ini">
            <div class="title_ini">
                <h1>TRABAJA COMO MODELO JP</h1>
            </div>
            <div class="subtitle_ini">
                <h3>Rellena el formulario y agenda tu entrevista</h3>
            </div>
            <div class="container_btn">
                <a href="form_entrevista.php" class="btn form_btn" target="_blank">
                    Conviértete en Modelo
                </a>
            </div>
        </div>
    </section>
    <section class="mision_vision">
        <div class="txt-container">
            <h2>Somos..</h2>
            <p>
                En Jp Media Group, nos enorgullecemos de ser una agencia de modelos líder en Pereira, con
                más de años de experiencia en la industria. Desde nuestra fundación, nos hemos dedicado a
                descubrir y promover el talento de modelos locales, ofreciendo oportunidades emocionantes y abriendo
                puertas a la industria de la moda y el entretenimiento.

                Nos esforzamos por brindar a nuestros modelos un ambiente de trabajo seguro, respetuoso y enriquecedor,
                donde puedan crecer y desarrollarse tanto profesional como personalmente.

                En Jp Media Group, valoramos la diversidad y la inclusión, y nos esforzamos por representar
                y promover la belleza en todas sus formas. Creemos que cada persona tiene algo único que ofrecer, y
                nuestro objetivo es ayudar a nuestros modelos a brillar y alcanzar su máximo potencial.

                Estamos comprometidos con la excelencia en todo lo que hacemos, desde la selección y formación de
                nuestros modelos. Nuestro equipo está compuesto por profesionales apasionados y dedicados que trabajan
                arduamente para asegurar el éxito de nuestros modelos en la industria.

                ¡Únete a nosotros y descubre tu potencial en el mundo de la moda con Jp Media Group!
            </p>
        </div>
        <div class="txt-container">
            <h2>Buscamos..</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, illum, doloribus optio quidem
                consequuntur ex aperiam itaque eum quo laborum reiciendis eligendi nam? Alias a expedita recusandae
                eos
                magni architecto!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus perspiciatis dolorum aliquam
                iusto
                asperiores pariatur obcaecati ducimus quo nam eius, a nostrum nemo porro accusamus doloremque
                quaerat,
                mollitia officia. Provident!Loremlor
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque obcaecati ipsa quis illum?
                Reiciendis ab
                neque laudantium eveniet? Aliquid itaque nobis quibusdam? Labore non id et dolorem quis. Velit,
                assumenda. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non enim delectus nobis
                recusandae
                minus reiciendis laborum praesentium consectetur eveniet harum tempore odit, aliquam quasi cum,
                numquam
                sunt officia sint porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                accusantium culpa incidunt mollitia explicabo dolorum ex quod.
            </p>
        </div>
    </section>
    <section>

        <div class="slider-frame">
            <ul>
                <li><img src="assets/images/img1.jpg" alt=""></li>
                <li><img src="assets/images/img2.jpg" alt=""></li>
                <li><img src="assets/images/img3.jpg" alt=""></li>
                <li><img src="assets/images/img4.jpg" alt=""></li>
            </ul>
        </div>
    </section>

    <section>
        <div class="blog">
            <h2>Documentos de interés - Blog</h2>
            <section>
                <div>
                    <a href="blog/dic_webcam.html"><img src="assets/images/Vista_Previa_Dicc.png"><br> Diccionario
                        Webcam</a>
                </div>
                <div>
                    <a href="blog/def_webcam.html"><img src="assets/images/Vista_Previa_Que_es.png"><br>¿Qué es el
                        WebCam?</a>
                </div>
                <div>
                    <a href="blog/tokens.html"><img src="assets/images/Vista_Previa_Tokens.png"><br>¿Como Funcionan los
                        Tokens?</a>
                </div>
            </section>
        </div>

        <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>
    </section>

    <footer>
        <div class="footer">
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
        </div>
        <div class="banner_redes">
            <a href="https://www.facebook.com/jpmediagroupa/" target="_blank"><img src="assets/images/facebook.png"></a>
            <a href="https://www.instagram.com/jpmediagroup_02/" target="_blank"><img
                    src="assets/images/instagram.png"></a>
            <a href="mailto:admon.jpmedia@gmail.com" target="_blank"><img src="assets/images/gmail.png"></a>
        </div>
    </footer>
    <script src="backend/auto_scroll.js"></script>
    <script src="backend/menu.js"></script>
</body>

</html>