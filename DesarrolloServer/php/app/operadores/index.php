<?php
echo "<h1>POTENCIAS CON BUCLE</h1>";
for($a=1;$a<=10;$a++){
    $potencia = 2**$a;
    echo "<p>2 <sup>$a</sup> = $potencia</p>";
}
echo "<h1>POTENCIAS pow CON BUCLE</h1>";
for($a=1;$a<=10;$a++){
    $potencia = pow(2,$a);
    echo "<p>2 <sup>$a</sup> = $potencia</p>";
}

echo "<h1>POTENCIAS CON DESPLAZAMIENTO</h1>";
for($a=1;$a<=10;$a++){
    $potencia = 1<<$a;
    echo "<p>2 <sup>$a</sup> = $potencia</p>";
}

//visualizo un nombre en minuxuals y mayusculas y lo dejo en mayusuclas
// si asignamos & en la variable del parametro,se quedara el resultado
// de la funcion,en este caso se quedara en mayusculas
function mayusculasReferencia(string &$nombre):void{
    echo "<hr>";
    echo "<h1>dentro de la funcion $nombre</h1>";
    //strtoupper -> para convertir en mayusculas
    $nombre = strtoupper($nombre);
    echo "<h1>dentro de la funcion $nombre</h1>";
}

$nombre = "Iria";
mayusculasReferencia($nombre);
echo "<h1>despuse de la funcion el nombre vale $nombre</h1>";

//
echo "<hr><h1>Calculo de mascaras</h1>";
$numero1 = 128;
$numero2 = 200;
$and = $numero1 & $numero2;
echo "<h1>$numero1 & $numero2 = $and</h1>";
printf("<h1>%b & %b = %b</h1>",$numero1,$numero2,$and);
