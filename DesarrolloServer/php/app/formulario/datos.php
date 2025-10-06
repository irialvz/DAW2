<?php
$numero1=$_GET["numero1"];
$operador =$_GET["operador"];
$numero2 =$_GET["numero2"];
$total = 0;
switch ($operador) {
    case '+':
        $total = $numero1+$numero2;
        break;
    case '-':
        $total = $numero1-$numero2;
        break;
    case '*':
        $total = $numero1*$numero2;
        break;
    case '/':
        $total = $numero1.$numero2;
        break;
}
echo "<h1>$total
</h1>";
?>
