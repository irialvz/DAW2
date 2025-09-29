<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prueba</title>
</head>
<body>

<?php
echo "<h1>valor Entero </h1><br>";
$valorEntero = 5;
var_dump($valorEntero);
echo "<hr>";

echo "<br><h1>valor cadena </h1> <br>";
$valorCadena = "hola";
var_dump($valorCadena);

echo "<hr>";
echo "<br> <h1>valor decimal</h1> <br>";
$valorDecimal = 1.5;
var_dump($valorDecimal);

echo "<hr>";
echo "<br><h1>valor booleano </h1> <br>";
$valorBooleano = true;
var_dump($valorBooleano);

echo "<hr>";
echo "<br><h1>valor array </h1> <br>";
$valorArray = [1,2,3];
var_dump($valorArray);

echo "<hr>";
echo "<br><h1>valor null </h1> <br>";
$valorNull = null;
var_dump($valorNull);
?>


</body>

</html>