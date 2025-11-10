<?php
$carga = fn($clase)=> require "Class/$clase.php";
spl_autoload_register($carga);
$a = new A();
$b = new B();
$c = new C();
echo "Clase $a";
echo "Clase $b";
echo "Clase $c";
//require "./Persona.php";
$count = &Persona::$numeroPersonas;

$p1 = new Persona("Iria","29/01/2006","Zaragoza");
echo "<h1>Creada la persona ".$p1."<br> Actualmente hay ".$count." creadas<br></h1> ";
$p2 = new Persona("Juan","06/07/2006","Zaragoza");
echo "<h1>Creada la persona ".$p2."<br> Actualmente hay ".$count." creadas<br></h1> ";
unset($p1);
echo "<h1>Eliminada la persona <br> Actualmente hay ".$count." creadas<br> </h1>";

$p3 = new Persona("Xio","11/02/2005","Zaragoza");
echo "<h1>Creada la persona ".$p3."<br> Actualmente hay ".$count." creadas<br></h1> ";
echo "<hr>";
$m1 = new Medico("Maria","07/02/2001","Madrid","Cardio",4000);
echo "<h1>Creada la persona ".$m1."</h1>";
echo "<h1>El medico".$m1->getNombre()." cobra ".$m1->getSalario()." </h1>";
echo "<hr>";

$b1 = new Bailarin("Dan","06/08/2006","Zaragoza","Salsa");
echo "<h1>Creada la persona".$b1."</h1>";
?>