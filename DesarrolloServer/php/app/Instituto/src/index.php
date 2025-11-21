<?php
require '../vendor/autoload.php';
use \Class\Alumno;
$datos = Faker\Factory::create();
for ($i = 1; $i <= 10; $i++) {
    $nombre = $datos->firstName();
    $apellido = $datos->lastName();
    $email = $datos->email();
    $alumno[] = new Alumno($nombre, $apellido,$email);
}
echo "<h1>Alumnos ordenados por nombre</h1>";
//el sort es impreciso,mejor usort
usort($alumno, function($a, $b) {
    return strcmp($a->getNombre(), $b->getNombre());
});
for ( $j = 1; $j <= count($alumno)-1; $j++) {
        echo "<h3> $alumno[$j].\"\n"."<br></h3>";
}

echo "<h1>Alumnos ordenados por email</h1>";
usort($alumno, function($a, $b) {
    return strcmp($a->getEmail(), $b->getEmail());
});
for ( $j = 1; $j <= count($alumno)-1; $j++) {
    echo "<h3> $alumno[$j].\"\n"."<br></h3>";
}
//$p1 = new Alumno("iria","iria@gmail");
//echo "<h1>$p1</h1>";
//crear un sort en funcion

?>