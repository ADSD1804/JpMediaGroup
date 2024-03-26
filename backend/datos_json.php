<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "jp_database";

$connection = mysqli_connect($host, $user, $password, $dbname);

if ($connection) {

    $sql = "SELECT nombre, email, id_cargo * FROM usuarios";

    $resultado = mysqli_query($connection, $sql);

    $data = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        $data[] = $row;
    }

    // Convertir el array PHP a formato JSON
    $json_data = json_encode($data);

    // Especificar la ruta del archivo JSON donde se almacenarán los datos
    $file_path = "../data/users.json";

    // Escribir los datos JSON en el archivo
    if (file_put_contents($file_path, $json_data)) {
        echo "Los datos se han almacenado correctamente en el archivo '$file_path'.";
    } else {
        echo "Error al escribir los datos en el archivo.";
    }
} else {
    echo "Error en la conexión";
}