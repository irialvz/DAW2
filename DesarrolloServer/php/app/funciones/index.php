<?php
function mayor(int|string $arg1,int|string $arg2):int|string {
    if (is_string($arg1))
        $resultado = $arg1 < $arg2?$arg1:$arg2;
    else 
    $resultado = $arg1 > $arg2?$arg1:$arg2;
    return $resultado;
}


//funcion con difrenretes tipos de parametros
//cuatro casos: introducir dos enteros,un enrero,un string o nada
function racional(int|string $num=1,int $den=1):string{
    if (is_string($num)){
        $valor = explode("/",$num);
        $num = $valor[0];
        $den = $valor[1];
    }

    return "$num/$den";
}


$nombre = "Iria";
//FUNCIONES ANONIMAS
//si queremos usar una variable de fuera del contexto,usaremos USE
$mayorAnonimo = function (int $a,int $b) use ($nombre):string{
    return match ($a<=>$b){
        1 => "$nombre dice que $a es mayor que $b",
        -1 => "$nombre dice que $b es menor que $a",
        0 => "$nombre dice que $a es igual a $b"
    };
};


//FUNCIONES FLECHA
$mayorFlecha = fn($a,$b)=> match($a<=>$b){
    1 => "$nombre dice que $a es mayor que $b",
    -1 => "$nombre dice que $b es menor que $a",
    0 => "$nombre dice que $a es igual a $b"
};


//factorial con anonimo
//  & servia para referenciarlo
$factorial_anonimo = function ($num) use(&$factorial_anonimo){
    return $num==0? 1 : $num*factorial_anonimo($num-1);
};


//FUNCION factorial DE FORMA RECURSIVA
function factorial($num)
{
    if ($num == 0){
        return 1;
    }else {
        return $num * factorial($num-1);
    }
}



$r1= racional(10,6);
$r2= racional(10);
$r3= racional("12/2");
$r4= racional();
echo "<h1>Funcion con diferentes tipos de parametros</h1>";
echo "<h1>r1: $r1</h1>";
echo "<h1>r2: $r2</h1>";
echo "<h1>r3: $r3</h1>";
echo "<h1>r4: $r4</h1>";

echo "<hr>";
echo "<h1>Funcion para mayor que</h1>";
//para numeros
    $num1 = 20;
    $num2 = 30;
    $mayor = mayor($num1,$num2);
    echo "Valor mayor de $num1 y $num2 es $mayor <br><br>";
//para nombre
$nombre1 = "Carmen";
$nombre2 = "Ana";
$mayor = mayor($nombre1,$nombre2);

echo "Valor mayor de $nombre1 y $nombre2 es $mayor <br>";

echo "<hr>";
echo "<h1>Funcion Anonima</h1>";
$a = rand(1,10);
$b = rand(1,10);
$resul = $mayorAnonimo($a,$b);
echo "<p>$resul</p>";

echo "<hr>";
echo "<h1>Funcion flecha</h1>";
$c = rand(1,10);
$d = rand(1,10);
$resulFlecha = $mayorFlecha($c,$d);
echo "<p>$resulFlecha</p>";

echo "<hr>";
echo "<h1>Funcion recursiva</h1>";
$recursivo = 3;
$resulFactorial = factorial($recursivo);
echo "<p>El factorial de $recursivo es $resulFactorial</p>";
