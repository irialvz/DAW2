<?php
//formas de importar
// include => intenta incluir el fichero,si no existe cotinua
// include_once => once: si ya lo he incluido no lo vuelvo a hacer
// require => intenta incluir el fichero,si no existe error. ESTE ES EL MAS COMUN
// require_once =>
require_once "./Racional.php";
$r1 = new Racional(5,5);
$r2 = new Racional(25);//25/1
$r3 = new Racional();//(1/1)
$r4 = new Racional(7,9);
$r5 = new Racional("8/7");
$r5 = new Racional("85");
echo "Valor de r1 $r1";
echo "<br>";
echo "Valor de r1 $r2";
echo "<br>";
echo "Valor de r1 $r3";
echo "<br>";
echo "Valor de r1 $r4";
echo "<br>";
echo "Valor de r1 $r5";