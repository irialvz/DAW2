<?php
$NOMBRE=htmlspecialchars($_POST["nombre"]);
$PASSWORD =htmlspecialchars($_POST["password"]);
$EDAD = filter_input(INPUT_POST, "edad", FILTER_SANITIZE_NUMBER_INT);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Datos Personales</legend>
    <h1>Nombre <?="$NOMBRE" ?></h1>
    <h1>Password <?="$PASSWORD" ?></h1>
    <h1>EDAD <?="$EDAD" ?></h1>
    <a href="datos_personales.php">volver</a>
</fieldset>


</body>
</html>
