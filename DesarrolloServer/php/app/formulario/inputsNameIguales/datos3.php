<?php
$opcion = $_POST["submit"];
$mensaje = match ($opcion) {
    "Enviar" => "Has presionado Enviar",
    "Cancelar" => "Has presionado Cancelar",
    "Borrar" => "Has presionado Borrar",
    "Listar" => "Has presionado Listar",
    default => "No has presionado nada",
}

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
    <h1>Manejo de inputs</h1>
    <p> <?=$mensaje ?> </p>
    <a href="inputs_iguales.php">volver</a>


</body>
</html>
