<?php
$numero1=$_GET["numero1"];
$operador =$_GET["operador"];
$numero2 =$_GET["numero2"];
$operacion = "$numero1 $operador $numero2";
//validar
if(!is_int($numero1) || !is_int($numero2)){
    $msj = "El valor ingresado no es valido.Operacion $operacion imposible";
};
if($operador == ":" && $numero2 = 0){
    $msj = "Division $operacion  imposible";
};
//En funcion del operador realiza el calculo
if ($msj == ""){
    $msj = match($operador){
        '*' => $numero1*$numero2,
        '+' => $numero1+$numero2,
        '-' => $numero1-$numero2,
        '/' => $numero1/$numero2,
    };
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
<h1><?= $msj?></h1>
<a href="formulario.php">Vovler</a>
</body>
</html>
