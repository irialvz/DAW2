<?php
    $notas = array();
    $notas = array_fill(0,15,0);
    //en array map declaramos una funcion que se aplicara iterativamente para cada valor del array
    // en este caso se ha creado una funcion anonima que realiza el random
    $notas = array_map(fn()=>rand(5,10),$notas);
var_dump($notas);
    $notaMax = max($notas);
    echo"<h3>La nota maxima es $notaMax</h3>";
    $notaMin = min($notas);
    echo"<h3>La nota minima es $notaMin</h3>";
    $notaMedia = array_sum($notas)/sizeof($notas);
    echo"<h3>La nota media es $notaMedia</h3>"

?>

