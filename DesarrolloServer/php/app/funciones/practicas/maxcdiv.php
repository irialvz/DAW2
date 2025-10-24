<?php
//Dados dos numeros quiero obtener el mcd de ellos usando el metodo de Euclides
//funcion tradicional
function mcd_tradicional($a,$b){
    while($b != 0){
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    return $a;

}
//FUNCION TRADICIONAL recursiva?
$mayor = fn($a,$b) => $a > $b ? $a : $b;
function mcd_recursivo_1($a,$b):int{
    return $b==0?$a : mcd_recursivo_1($b,$a%$b);
};
//recursivo 2
$mcd_recursivo_2 = function ($a,$b) use(&$mcd_recursivo_2):int{
    return $b==0?$a : $mcd_recursivo_2($b,$a%$b);
};


//FUNCION FLECHA
//$mcdFlecha = fn($a,$b) => $a > $b ? $mayor=$a && $menor=$b : $mayor=$b && $menor=$a;

//FUNCION ANONIMA en variable
$mcdAnonimo = function ($a,$b):int{
    if ($a > $b ){
        $numeroMayor = $a;
        $numeroMenor = $b;
    }else {
        $numeroMayor = $b;
        $numeroMenor = $a;
    }
    $cociente = $numeroMayor /$numeroMenor;
    $resto = $numeroMayor % $numeroMenor;
    if ($resto != 0){
        mcd($numeroMenor,$resto);
    }
    return (int)$cociente;
};


echo "<p>Dados dos números quiero obtener el mcd de ellos usando el metodo de Euclides <br>
Este métdodo algoritmicamente indica que hay que relizar sucesivas restar de un número y otro<br>
El resultado se vuelve a restar con el menor de los números<br>
Al final termino con un uno o con un cero<br>
WSi es cero el último número es el mcd</p>";
$a = 150;
$b = 39;
$mcd = mcd_tradicional($a,$b);
echo "<h1>El MCD con funcion tradicional de $a y $b es $mcd</h1>";
echo "<hr>";
$anonimo = $mcdAnonimo($a,$b);
echo "<h1>El MCD con funcion anonima de $a y $b es $anonimo</h1>";
echo "<hr>";
$anonimoRecursivo = $mcd_recursivo_2($a,$b);
echo "<h1>El MCD con funcion anonima recursiva de $a y $b es $anonimoRecursivo</h1>";
echo "<hr>";
$recursivo1 = mcd_recursivo_1($a,$b);
echo "<h1>El MCD con funcion  recursiva de $a y $b es $recursivo1</h1>";
echo "<hr>";
