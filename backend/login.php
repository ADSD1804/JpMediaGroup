<?php
$email = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion = mysqli_connect("localhost", "root", "1020jp", "jp_database");

$consulta = "SELECT * FROM usuarios where email = '$email' and contraseña = '$contrasenia'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_cargo' == 1]){

    header("location: ../admin.html");

}else if($filas['id_cargo'] == 2){

    header("location: ../users.html");
}

else{
    ?>
    <?php
    include("../inicio.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

