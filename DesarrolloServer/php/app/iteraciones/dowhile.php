<?php
$numero = 0;
$vuelta = 0;
$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>IF EN PHP</h2>
        <ul>
            <li>Genero un numero</li>
            <li>Muestro el texto en rojo si es par</li>
            <li>Muestro el texto en azul si es impar</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <!--Esposible que aquí también tengamos
        html intercaladocon php-->
        <?php
        while ($vuelta != 100){
            if ($numero % 2 == 0){
                $total += $numero;
                $numero++;
            }
            $vuelta++;
        }
        ?>
        <h1>El total es <?=$total ?></h1>
    </div>

</div>
</body>
</html>
