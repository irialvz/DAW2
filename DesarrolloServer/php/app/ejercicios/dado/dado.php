<?php
$veces_uno = 0;
$veces_dos = 0;
$veces_tres = 0;
$veces_cuatro = 0;
$veces_cinco = 0;
$veces_seis = 0;
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
        <h2>DADO</h2>
        <ul>
            <li>funcion1</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        for ($tirada_dado = 0; $tirada_dado <= 1000; $tirada_dado++) {
            $numero_dado = rand(1,6);
            switch ($numero_dado) {
                case 1:
                    $veces_uno++;
                    break;
                case 2:
                    $veces_dos++;
                    break;
                case 3:
                    $veces_tres++;
                    break;
                case 4:
                    $veces_cuatro++;
                    break;
                case 5:
                    $veces_cinco++;
                    break;
                case 6:
                    $veces_seis++;
                    break;
            }

        }
        ?>
        <h1>ha salido el numero 1 -> <?=$veces_uno ?> veces</h1>
        <h1>ha salido el numero 2 -> <?=$veces_dos ?> veces</h1>
        <h1>ha salido el numero 3 -> <?=$veces_tres ?> veces</h1>
        <h1>ha salido el numero 4 -> <?=$veces_cuatro ?> veces</h1>
        <h1>ha salido el numero 5 -> <?=$veces_cinco ?> veces</h1>
        <h1>ha salido el numero 6 -> <?=$veces_seis ?> veces</h1>
    </div>

</div>
</body>
</html>
