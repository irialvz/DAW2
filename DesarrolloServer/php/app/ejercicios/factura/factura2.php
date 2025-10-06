<?php
$cliente = "Juan Pérez";
$fecha = date("d/m/Y");
$factura = 1;
$producto1 = "Cuadros";
$precio1 = rand(1, 100);
$producto2 = "Luminarias intensas";
$precio2 = rand(1, 100);

$precio1_legible = number_format($precio1,2,',','.');
$precio2_legible = number_format($precio2,2,',','.');
$titulo = str_pad($cliente,10," ",STR_PAD_LEFT);
echo str_pad("",45,"-",STR_PAD_BOTH);
echo "<br>";
echo "$titulo";
echo "<br>";
echo str_pad("",45,"-",STR_PAD_BOTH);

echo "<br>$producto1 $precio1_legible";
echo "<br>$producto2 $precio2_legible";

?>