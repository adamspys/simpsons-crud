<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <!-- Asegúrate de incluir Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            width: 18rem; /* Ancho fijo para todas las tarjetas */
            margin: 10px; /* Espaciado entre tarjetas */
        }
        .card-img-top {
            height: 150px; /* Altura fija para todas las imágenes */
            object-fit: contain; /* Mantiene la imagen completa sin recortes */
            width: 100%; /* Asegura que la imagen ocupe todo el ancho de la tarjeta */
        }
    </style>
</head>

<body>

    <?php
    include_once('conexion.php');
    include_once('cabecera.php');

    echo '<div class="container mt-4">';
    
    $sql = "SELECT id, imagen, nombre, edad, pelo, padres, checked FROM personajes";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="card" style="display: inline-block;">
                <img src="' . $fila['imagen'] . '" class="card-img-top" alt="Imagen de ' . $fila['nombre'] . '">
                <div class="card-body">
                    <h5 class="card-title"><strong>' . $fila['nombre'] . '</strong></h5>
                    <p class="card-text">
                        <strong>Edad:</strong> ' . $fila['edad'] . '<br>
                        <strong>Pelo:</strong> ' . $fila['pelo'] . '<br>
                        <strong>Padres:</strong> ' . $fila['padres'] . '<br>
                        <strong>Checked:</strong> ' . $fila['checked'] . '
                    </p>
                </div>
            </div>';
        }
    } else {
        echo "<div class='alert alert-warning'>Sin registros encontrados en la base de datos</div>";
    }

    echo '</div>';
    ?>

    <!-- Agrega los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

