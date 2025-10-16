<?php
$opcion = $_POST["submit"]??"";
//operador ??"" si no tiene valor coge el siguiente
$mensaje = match ($opcion) {
    "Enviar" => "Has presionado Enviar",
    "Cancelar" => "Has presionado Cancelar",
    "Borrar" => "Has presionado Borrar",
    "Listar" => "Has presionado Listar",
    default => "No has presionado nada",
}

?>
<html>
<head>

</head>
<body>
<fieldset style="background: #007BFF">
    <legend>Datos</legend>
    <form action="" method="post">
        <input type="submit" name="submit" value="Enviar">
        <input type="submit" name="submit" value="Cancelar">
        <input type="submit" name="submit" value="Listar">
        <input type="submit" name="submit" value="Borrar">
    </form>
    <p><?=$mensaje ?></p>
</fieldset>

</body>
</html>