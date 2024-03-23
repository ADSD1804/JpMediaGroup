<?php

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$hijos = $_POST['hijos'];
$experiencia_modelo = $_POST['xp'];
$experiencia_servicio_cliente = $_POST['srvc'];
$inconveniente = $_POST['inconveniente'];
$como_encontraste = $_POST['opcion'];
$motivacion = $_POST['motivacion'];
$nivel_academico = $_POST['academico'];
$nivel_ingles = $_POST['ingles'];
$nivel_informatica = $_POST['informatica'];
$horario_preferencia = $_POST['horario'];
$tipo_paginas_preferencia = $_POST['paginas'];
$dudas = $_POST['dudas'];

$destinatario = 'andresdesarrollo.jp@gmail.com';

$asunto = 'Nuevo formulario de solicitud de modelos';

$contenido = "Nombre: $nombre\n";
$contenido .= "Cédula: $cedula\n";
$contenido .= "Teléfono: $telefono\n";
$contenido .= "¿Tienes hijos?: $hijos\n";
$contenido .= "¿Experiencia como modelo?: $experiencia_modelo\n";
$contenido .= "¿Experiencia con servicio al cliente?: $experiencia_servicio_cliente\n";
$contenido .= "¿Algun inconveniente para trabajar?: $inconveniente\n";
$contenido .= "¿Cómo encontraste nuestra página?: $como_encontraste\n";
$contenido .= "¿Qué te motiva?: $motivacion\n";
$contenido .= "Nivel Académico: $nivel_academico\n";
$contenido .= "Nivel de Inglés: $nivel_ingles\n";
$contenido .= "Nivel de Informática: $nivel_informatica\n";
$contenido .= "Horario de preferencia: $horario_preferencia\n";
$contenido .= "Tipo de páginas de preferencia: $tipo_paginas_preferencia\n";
$contenido .= "Dudas: $dudas\n";

mail($destinatario, $asunto, $contenido);

header('Location: ../modelos.html');
?>
