<?php
//Escribimos aquí odo el php correspondiente al controlador
//Instrucciones y lógica necesarias queno visualizan valor,lo generan
$numero = rand(1,10);
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
        <?php if ($numero % 2 == 0) {?>
            <h1 style='color: #ff0d19'>el numero <?=$numero?> es par</h1>;
        <?php } else { ?>
            <h1 style='color: #007BFF'>el numero <?=$numero?> es impar</h1>;
        <?php }
        ?>
    </div>

</div>
<hr>

<?php
$edad = rand(0,100);
$genero = rand(0,3);
?>
<div class="container">
    <div class="box">
        <h2>SWITCH EN PHP</h2>
        <ul>
            <li>Genero un numero aleatorio entre 1 y 100</li>
            <li>Muestro el rango de edad</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        switch (true) {
            case ($edad > 0 and $edad <= 3):
                $mensaje = "eres un bebe";
                break;
            case ($edad <= 11):
                $mensaje = "eres un niño";
                break;

            case ($edad <= 17):
                $mensaje = "eres un adolescente";
                break;
            case ($edad <= 30):
                $mensaje = "eres un joven";
                break;
            case ($edad <= 60):
                $mensaje = "eres un adulto";
                break;
            case ($edad <= 90):
                $mensaje = "eres un experimentado";
                break;
            case ($edad <= 100):
                $mensaje = "eres un suertudo";
                break;
            default:
                $mensaje = "es un error";
        }?>
        <h1>Si tienes <?= $edad ?>  <?= $mensaje ?></h1>

        <!--Esposible que aquí también tengamos
        html intercaladocon php-->

    </div>
</div>
<hr>

<?php
$mes = rand(1,20);
$msj = match ($mes) {
    1=>"Enero",
    2=>"Febrero",
    3=>"Marzo",
    4=>"Abril",
    5=>"Mayo",
    6=>"Junio",
    7=>"Julio",
    8=>"Agosto",
    9=>"Septiembre",
    10=>"Octubre",
    11=>"Noviembre",
    12=>"Diciembre",
    default=>"error"
};
?>
<div class="container">
    <div class="box">
        <h2>MATCH EN PHP</h2>
        <ul>
            <li>Genero un mes aleatorio </li>
<!--            <li>Muestro el rango de edad</li>-->
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <h1>Mes <?= $mes?>  es <?= $msj ?></h1>

        <!--Esposible que aquí también tengamos
        html intercaladocon php-->

    </div>
</div>
</body>
</html>