<?php

include_once('conexion.php');
//actualizar registros


$id = $_POST['id'];
$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pelo = $_POST['pelo'];
$padres = $_POST['padres'];
$checked = $_POST['checked'];


$sql = "DELETE FROM personajes WHERE id = '$id'";


if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro eliminado correctamente";
} else {

    $conexion->error;
};

$conexion->close();

header('Location:listar.php');
