<?php
if (isset($_POST['submit'])) {
    $nombres[] = $_POST["nombre"]??"";
    $clicks=$_POST['clicks'];
    $clicks++;
}
?>
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
<fieldset style=" background: coral">
    <legend> </legend>
    <form action="reto.php" method="post">
        Nombre <input type="text" name="nombre">
        <input type="hidden" name="clicks">
        <button type="submit">Enviar</button>
    </form>
</fieldset>
<h1>Has realizado <?=$clicks ??0 ?></h1>

</body>
</html>
