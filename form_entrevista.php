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
        </div>
    </header>

    <section class="container">
        <div class="container_form_entrev">
            <div class="container_title">
                <h1 class="title_form">Trabaja con nosotros.</h1>
            </div>

            <form action="" id="form_entrevista" class="form_entrevista">
                <div>
                    <h2 class="question">Nombre Completo:</h2>
                    <input type="text" name="nombre" id="nombre" alt="nombre" required><br>
                </div>

                <div>
                    <h2 class="question">Número de Cédula:</h2>
                    <input type="number" name="cedula" id="cedula" alt="cedula" required><br>
                </div>
                <div>
                    <h2 class="question">Correo electrónico:</h2>
                    <input type="email" name="correo" id="correo" alt="correo" required><br>
                </div>
                <div>
                    <h2 class="question">Número de teléfono:</h2>
                    <input type="number" name="telefono" id="telefono" alt="telefono" required><br>
                </div>
                <div class="radio">
                    <h2 class="question">¿Cuentas con experiencia como modelo?</h2>
                    <input type="radio" name="si" id="si">
                    <label for="si">Si</label><br>
                    <input type="radio" name="no" id="no">
                    <label for="no">No</label><br>
                </div>
                <div>
                    <h2 class="question">Si tu respuesta fue sí, cuánto tiempo?</h2>
                    <input type="text" name="exp-tiempo" id="exp-tiempo"><br>
                </div>
                <div class="radio">
                    <h2 class="question">Si tienes experiencia, ¿Qué tipo de páginas son de tu preferencia?</h2>
                    <input type="radio" name="publicas" id="publicas">
                    <label for="publicas">Públicas</label><br>
                    <input type="radio" name="privadas" id="privadas">
                    <label for="privadas">Privadas</label><br>
                </div>
                <div class="radio">
                    <h2 class="question">¿Cuentas con experiencia en servicio al cliente?</h2>
                    <input type="radio" name="si" id="si">
                    <label for="si">Si</label><br>
                    <input type="radio" name="no" id="no">
                    <label for="no">No</label><br>
                </div>
                <div>
                    <h2 class="question">Si tu respuesta fué sí, cuánto tiempo?</h2>
                    <input type="text" name="exp-tiempo" id="exp-tiempo"><br>
                </div>
                <div>
                    <h2 class="question">¿Tienes algún percance que afecte tu horario laboral?</h2>
                    <input type="text" name="percance" id="percance"><br>
                </div>
                <div class="checkbox">
                    <h2 class="question">¿Como nos encontraste?</h2>
                    <input type="checkbox" name="redes" id="redes">
                    <label for="redes">Redes Sociales</label><br>
                    <input type="checkbox" name="referido" id="referido">
                    <label for="referido">Referido</label><br>
                    <input type="checkbox" name="navegacion" id="navegacion">
                    <label for="navegacion">Navegando en internet</label><br>
                    <input type="text" placeholder="Otra"><br>
                </div>
                <div class="radio">
                    <h2 class="question">Nivel académico alcanzado</h2>
                    <input type="radio" name="primaria" id="primaria">
                    <label for="primaria">Básica Primaria</label><br>
                    <input type="radio" name="bachiller" id="bachiller">
                    <label for="bachiller">Bachiller</label><br>
                    <input type="radio" name="tecnico" id="tecnico">
                    <label for="tecnico">Técnico</label><br>
                    <input type="radio" name="tecnologo" id="tecnologo">
                    <label for="tecnologo">Tecnólogo</label><br>
                    <input type="radio" name="profesional" id="profesional">
                    <label for="profesional">Profesional</label><br>
                </div>
                <div class="radio">
                    <h2 class="question">Nivel de Inglés</h2>
                    <input type="radio" name="basico" id="basico">
                    <label for="basico">Básico</label><br>
                    <input type="radio" name="medio" id="medio">
                    <label for="medio">Medio</label><br>
                    <input type="radio" name="alto" id="alto">
                    <label for="alto">Alto</label><br>
                </div>
                <div class="radio">
                    <h2 class="question">Nivel de Informática</h2>
                    <input type="radio" name="junior" id="junior">
                    <label for="junior">Básico</label><br>
                    <input type="radio" name="semi-senior" id="semi-senior">
                    <label for="semi-senior">Medio</label><br>
                    <input type="radio" name="senior" id="senior">
                    <label for="senior">Alto</label><br>
                </div>
                <div class="radio">
                    <h2 class="question">¿Qué horario es de tu preferencia?</h2>
                    <input type="radio" name="mañana" id="mañana">
                    <label for="mañana">Mañana (6:00 am - 2:00 pm)</label><br>
                    <input type="radio" name="tarde" id="tarde">
                    <label for="tarde">Tarde (2:00 pm - 10:00 pm)</label><br>
                    <input type="radio" name="noche" id="noche">
                    <label for="noche">Noche (10:00 pm - 6:00 am)</label><br>
                </div>
                <div class="radio">
                    <h2 class="question">¿Tienes hijos?</h2>
                    <input type="radio" name="si" id="si">
                    <label for="si">Si</label><br>
                    <input type="radio" name="no" id="no">
                    <label for="no">No</label><br>
                </div>
                <div>
                    <h2 class="question">¿Qué te motiva en el día a día?</h2>
                    <input type="text" name="motivacion" id="motivacion"><br>
                </div>
                <div>
                    <h2 class="question">Si tienes alguna duda, déjanos leerla</h2>
                    <textarea name="dudas" id="dudas" cols="30" rows="10" required></textarea><br>
                </div>
                <div>
                    <button type="submit">Enviar</button>
                    <button type="reset">Borrar</button>
                </div>
            </form>
            <a href="mailto:andresdesarrollo.jp@gmail.com" id="mailto">mail</a>
        </div>
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
            <a href="https://www.facebook.com/jpmediagroupa/" target="_blank"><img src="assets/images/facebook.png"></a>
            <a href="https://www.instagram.com/jpmediagroup_02/" target="_blank"><img
                    src="assets/images/instagram.png"></a>
            <a href="mailto:admon.jpmedia@gmail.com" target="_blank"><img src="assets/images/gmail.png"></a>
        </div>
    </footer>

    <button id="botonIrArriba" onclick="irAlPrincipio()"><img src="assets/images/arrow.png" alt=""></button>


    <script src="backend/agendar_entrevista.js"></script>
    <script src="backend/auto_scroll.js"></script>
</body>

</html>