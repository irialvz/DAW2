<?php
$cliente = "Juan Pérez";
$fecha = date("d/m/Y");
$factura = 1;
$producto1 = "Cuadros";
$precio1 = rand(1, 100);
$producto2 = "Luminarias intensas";
$precio2 = rand(1, 100);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>
<div class="container">

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <?php
        $precio1_legible = number_format($precio1,2,',','.');
        $precio2_legible = number_format($precio2,2,',','.');
        $titulo = str_pad($cliente,10," ",STR_PAD_RIGHT);
        echo str_pad("",45,"-",STR_PAD_BOTH);
        echo "<br>";
        echo "$titulo";
        echo "<br>";
        echo str_pad("",45,"-",STR_PAD_BOTH);

        echo "<br>$producto1 $precio1_legible";
        echo "<br>$producto2 $precio2_legible";

        ?>
    </div>

</div>
</body>
</html>
