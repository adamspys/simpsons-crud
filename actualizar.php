<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>

<body>
    <?php

    include_once('cabecera.php');
    include_once('conexion.php');

    echo '<pre>';
    $sql = "SELECT id,imagen,nombre,edad,pelo,padres,checked FROM personajes";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            echo "<form action=actualizarR.php method='post'><input type='text' readonly name='id' value='" . $fila['id'] . "'>";

            echo "<input type='text' name='nombre' value='" . $fila['nombre'] . "'>";

            echo "<input type='text' name='edad' value='" . $fila['edad'] . "'>";

            echo "<input type='text' name='pelo' value='" . $fila['pelo'] . "'>";

            echo "<input type='text' name='padres' value='" . $fila['padres'] . "'>";

            echo "<input type='text' name='checked' value='" . $fila['checked'] . "'>";

            echo "<input type='text' name='imagen' value='" . $fila['imagen'] . "'>";

            echo "<button>Enviar</button></form><hr>";

            /*    echo $fila['id'] . " " . $fila['nombre'] . " " . $fila['apellido'] . "<hr>";   */
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }






    ?>

    </pre>
</body>

</html>