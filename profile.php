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
        <div class="logo-container">
            <a href="inicio.html"><img src="assets/images/LOGO.png" alt="logo_JP"></a>
        </div>
        <div class="container_banner">
            <div class="login">
                <button onclick="loginAnimation()" class="loginbtn"><img src="assets/images/user_icon.png"
                        alt=""></button>
                <div id="form_login" class="login_content">
                    
                </div>
            </div>
            <div class="dropdown">
                <button onclick="toggleDropdown()" class="dropbtn">Menú</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="inicio.html">Inicio</a>
                    <a href="modelos.html">Modelos</a>
                    <a href="blog.html">Blog</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <h1>Bienvenido Usuario</h1>
    </section>
    
    <script src="backend/menu.js"></script>
</body>
</html>