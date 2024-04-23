<?php

include ("connection.php");

if (isset($_POST["email"]) && isset($_POST['contrasenia'])) {
        function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['contrasenia']);

    if (empty($email)) {
        header("Location: ?error=Por favor ingresa un email valido");
        exit();
    } elseif (empty($password)) {
        header("Location: ?error=La contraseña es requerida");
        exit();
    } else {

        $password = md5($password);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["email"] === $email && $row['contrasenia'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['nombre'] = $row['nombre'];
                header('Location: profile.php');
                exit();
            } else {
                header('Location: ../inicio.php?error=El usuario o la clave son incorrectos');
                exit();
            }
        } else {
            header('Location: ../inicio.php?error=El usuario o la clave son incorrectos');
            exit();
        }
    }
} else {
    header('Location: ../inicio.php?error=El usuario o la clave son incorrectos');
    exit();
}