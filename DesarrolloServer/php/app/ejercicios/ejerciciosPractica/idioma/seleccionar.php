<?php
$idioma = $_POST["idioma"]??"";
$nombre = $_POST["nombre"]??"";
if ($nombre !=""){
    header("Location: sitio.php?idioma=".$idioma."&nombre=".$nombre);
    exit();
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
<form action="seleccionar.php" method="post">
    Idioma
    <select name="idioma" >
        <option value="español">Español</option>
        <option value="français">Français</option>
        <option value="english">English</option>
    </select>
    <br>
    Nombre <input type="textarea" name="nombre">
    <br>
    <button type="submit" name="submit">Enviar</button>
</form>

</body>
</html>
