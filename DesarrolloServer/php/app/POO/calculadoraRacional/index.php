<?php
//formas de importar
// include => intenta incluir el fichero,si no existe cotinua
// include_once => once: si ya lo he incluido no lo vuelvo a hacer
// require => intenta incluir el fichero,si no existe error. ESTE ES EL MAS COMUN
// require_once =>
require_once "./Racional.php";
//$r1 = new Racional(5,5);
//$r2 = new Racional(25);//25/1
//$r3 = new Racional();//(1/1)
//$r4 = new Racional(7,9);
//$r5 = new Racional("8/7");
//$r5 = new Racional("85");
if (isset($_POST['submit'])){
    $racional1 = $_POST["numero1"]??"1/1";
    $racional2 = $_POST["numero2"]??"1/1";
    $r1 = new Racional($racional1);
    $r2 = new Racional($racional2);
    $operador =$_POST["operadores"]??"";
    $msj = match ($operador) {
        "*" => "El valor de la multiplicacion es ".$r1->multiplicar($r2),
        "/" => "El valor de la division es ".$r1->dividir($r2),
        "+" => "El valor de la suma es ".$r1->sumarGeneralizado($r2),
        "-" => "El valor de la resta es ".$r1->restar($r2),
        default => "imposible hacerlo"
    };
    $suma = Racional::sumar_estatico($racional1,$racional2);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <fieldset>
   <legend></legend>
   <form action="index.php" method="post">
        Numero: <input name="numero1" type="text" >
       <select name="operadores" ">
           <option value="*">*</option>
           <option value="+">+</option>
           <option value="-">-</option>
           <option value="/">/</option>
       </select>
       Numero: <input name="numero2" type="text"  >
       <input type="submit" name="submit" value="Calcular" >
   </form>
  </fieldset>
    <?= $msj??""?>


</body>
</html>
