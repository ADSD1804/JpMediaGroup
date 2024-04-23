<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = "jp_database";

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect){
    echo "Conexion fallida";
}