<?php

$servidor = 'mysql-simpsons.alwaysdata.net';
$usuario = 'simpsons';
$contrasena = 'C31Lu3L3';
$bd = 'simpsons_crud';

//$servidor = 'localhost';
//$usuario = 'root';
//$contrasena = '';
//$bd = 'insertar-crud';


$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {

    die($conexion->connect_error);
}
