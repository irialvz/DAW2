<?php
//function validarExpresion($expresion, $cadena): bool
//{
//    return (preg_match($expresion, $cadena) ? true : false);
//}
$carga = fn($clase) => require "$clase.php";
spl_autoload_register($carga);
if (isset($_POST['submit'])) {
    $expresionRegular = $_POST['expresionRegular'];
    $cadena = new Cadena($_POST['cadena']);
    $msj = ($cadena->validarExpresionRegular($expresionRegular) ? "Expresion Regular $expresionRegular coincide en la cadena $cadena " : "Expresion Regular no coincide");
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
<fieldset>
    <legend></legend>
    <form action="index.php" method="post">
        Expresion regular: <input name="expresionRegular" type="text" value="<?=$expresionRegular ?? "" ?>">
        Cadena: <input name="cadena" type="text">
        <input name="submit" value="Validar" type="submit">
    </form>
    <p><?= $msj ?? "" ?></p>

</fieldset>

</body>
</html>
