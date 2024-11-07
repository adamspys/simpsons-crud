<?php
include_once('conexion.php');

$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pelo = $_POST['pelo'];
$padres = $_POST['padres'];
$checked = $_POST['checked'];

$sql = "INSERT INTO personajes (imagen, nombre, edad, pelo, padres, checked)
VALUES ('$imagen','$nombre','$edad', '$pelo','$padres','$checked')";


if ($conexion->query($sql) === TRUE) {

    echo 'Registro Ingresado Correctamente';
} else {

    echo $conexion->error;
}


$conexion->close();

header('Location:listar.php');
