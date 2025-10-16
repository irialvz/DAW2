<?php
if (!isset($_GET['nombreLogin'])) {
    $mensaje = "Error,no se han ingresado credenciales";
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
    <h1> <?=$mensaje ?></h1>
    <a href="loginFormulario.php">volver</a>



</body>
</html>
