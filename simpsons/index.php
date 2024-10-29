<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>

    <?php
    include_once('cabecera.php');
    ?>

    <pre>



    <form action="insertar.php" method="post">

        <label>Imagen</label>
        <input type="text" name='imagen'></input>

        <label>Nombre</label>
        <input type="text" name='nombre'></input>

        <label>Edad</label>
        <input type="text" name="edad"></input>

        <label>Pelo</label>
        <input type="text" name="pelo"></input>

        <label>Padres</label>
        <input type="text" name="padres"></input>

        <label>Checked</label>
        <input type="text" name="checked"></input>

        <button>Enviar</button>


    </form>

    </pre>
    <?php
    include_once('conexion.php');

    ?>

</body>

</html>