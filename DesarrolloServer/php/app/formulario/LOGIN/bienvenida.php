<?php
$NOMBRE = htmlspecialchars($_GET["nombreLogin"]);

if (is_null($NOMBRE)){
    header("location: error.php");
    exit;
}
if (isset($_GET['nombreLogin'])) {
    $nombre = htmlspecialchars($_GET['nombreLogin']); // Seguridad frente a XSS
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
    <h1>Bienvenido <?=$nombre ?></h1>
    <a href="loginFormulario.php">volver</a>


</body>
</html>
