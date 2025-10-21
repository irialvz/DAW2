<?php
function mayor(int|string $arg1,int|string $arg2):int|string {
    if (is_string($arg1))
        $resultado = $arg1 < $arg2?$arg1:$arg2;
    else 
    $resultado = $arg1 > $arg2?$arg1:$arg2;
    return $resultado;
}

//para numeros
//$num1 = 20;
//$num2 = 30;
//$mayor = mayor($num1,$num2);
//echo "Valor mayor de $num1 y $num2 es $mayor <br>";
//para nombre
$nombre1 = "Carmen";
$nombre2 = "Ana";
$mayor = mayor($nombre1,$nombre2);
echo "Valor mayor de $nombre1 y $nombre2 es $mayor <br>";