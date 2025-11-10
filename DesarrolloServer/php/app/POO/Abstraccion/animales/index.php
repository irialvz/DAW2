<?php
$carga = fn($clase) => require "$clase.php";
spl_autoload_register($carga);
$perro = new Perro();
$gato = new Gato();
$pato = new Pato();

echo "<h1>".$perro->hablar()."</h1>";
echo "<h1>".$gato->hablar()."</h1>";
echo "<h1>".$pato->hablar()."</h1>";