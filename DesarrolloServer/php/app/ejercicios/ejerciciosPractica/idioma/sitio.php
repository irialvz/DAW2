<?php
$nombre = $_GET["nombre"];
$idioma = $_GET["idioma"];
$acronimo = "";
$mensaje = "";
switch($idioma){
    case "english":
        $acronimo="en";
        $mensaje = "Welcome ".$nombre." to the ".$idioma." website";
        break;
    case "français":
        $acronimo="fr";
        $mensaje = "Bienvenue ".$nombre." dans le web ".$idioma;
        break;
    default:
        $acronimo="es";
        $mensaje = "Bienvenido ".$nombre." al sitio en ".$idioma;
        break;
}
?>
<!doctype html>
<html lang="<?=$acronimo?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?=$mensaje?></h1>

</body>
</html>
