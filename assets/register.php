<?php
require 'PHPExcel/PHPExcel.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Crear un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Agregar datos al archivo Excel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nombre')
            ->setCellValue('B1', 'Apellido')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', 'Contraseña')
            ->setCellValue('A2', $nombre)
            ->setCellValue('B2', $apellido)
            ->setCellValue('C2', $email)
            ->setCellValue('D2', $contraseña);

// Guardar el archivo Excel
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('registro.xlsx');

echo "Datos guardados exitosamente en Excel.";
?>