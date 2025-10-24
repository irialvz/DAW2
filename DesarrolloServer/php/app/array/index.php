<?php
//asignacion
$notas = array(20);
$notas_2 = [10.20,"paris","madrid","barcelona",10=>"hola","patata"];
var_dump($notas_2);
$notas_2 = ["pepe"];
var_dump($notas);
var_dump($notas_2);

//añadir elemento en una posicion especifica
$notas_2[67]="damn";
var_dump($notas_2);
//crear un  array de 20 numeros del 1 al 10
//$notas = array();
//for ($i=0;$i<=20;$i++){
//    $notas[]=rand(0,10);
//}
//var_dump($notas);

//funciones arrays
//crea un array desde el num 0 al num 20 con el valor 0
$notas = array_fill(0,20,rand(1,10));
$notas = array_map(fn()=>rand(0,10),$notas);
var_dump($notas);
//recoger el valor mas grande
$maxNotas = max($notas);
echo "<p>El valor mas grande del array es $maxNotas</p>";

$minNotas = min($notas);
echo "<p>El valor mas pequeño del array es $minNotas</p>";

$mediaNotas = array_sum($notas) / count($notas);
echo "<p>la media de valores del array es $mediaNotas</p>";

$numeroNotas = count($notas); //igual que size:of
echo "<p>El numero de elementos del array es $numeroNotas</p>";

//para recorrer arrays usaremos foreach
foreach($notas as $key => &$value){
    //si quiero incrementar un 20% al valor
    $value *=1.20;
    echo "<p>El valor $key es $value</p>";
}
var_dump($notas);

