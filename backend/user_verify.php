<?php 

include("database.php");

$email = $_POST['email'];
$password = $_POST['contrasenia'];
$cargo = $_POST['id_cargo'];

session_start();
$_SESSION['email']=$email;

$sql = "SELECT * FROM usuarios WHERE email ='$email' AND contraseña='$password' AND id_cargo='$cargo'";
$result = mysqli_query($connect, $sql);

$filas = mysqli_num_rows($result);

if ($cargo == 1){
    header("Location: ../admin.php");
} else if($cargo == 2){
    header("Location: ../profile.php");
} else{
    header("Location: ../inicio.html");
    echo"Error";
}
mysqli_free_result($result);
mysqli_close($connect);

