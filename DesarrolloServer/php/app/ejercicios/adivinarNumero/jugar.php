<?php
$opcion = $_POST["submit"] ?? "";
$intentos = $_POST["intentos"] ?? 0;
$numMin = $_POST["min"] ?? 0;
$numMax = $_POST["max"] ?? 0;
$jugada = $_POST["jugada"] ?? 0;
$numero = $_POST["num"] ?? 0;
switch ($opcion) {
    case 'Empezar':
        $numMin = 0;
        $numMax = 2**$intentos;
        $jugada = 1;
        $numero = intval(($numMin + $numMax) / 2);

        break;
    case 'Jugar':
        $resultado = $_POST["resultado"];
        switch ($resultado) {
            case ">":
                $numMin = $numero + 1;
                $numero = intval(($numMin + $numMax) / 2);
                $jugada++;
                break;
            case "<":
                $numMax = $numero - 1;
                $numero = intval(($numMin + $numMax) / 2);
                $jugada ++;
                break;
            case "=":
                header("Location:fin.php?jugada=".urlencode($jugada)."&intentos=".urlencode($intentos));
                exit();
                break;
        };

        break;
    case 'Reiniciar':
        $numMin = 0;
        $numMax = 2**$intentos;
        $jugada = 1;
        $numero = intval(($numMin + $numMax) / 2);

        break;

    default:
        header("Location: index.php");
        exit();
        break;
};

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Práctica 3 - Juego de Adivinar un Número</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="hero min-h-screen bg-base-200 flex items-center justify-center">
    <div class="max-w-lg bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">Empieza el Juego</h1>
        <p class="text-lg text-gray-600 mb-6">Información y opciones del juego</p>

        <form action="jugar.php" method="POST">
            <div class="bg-slate-300 p-5 rounded-lg mb-4">
                <h4 class="text-2xl font-semibold mb-2">Jugada nº <?=$jugada?>></h4>
                <h2 class="text-xl">¿El número es <span class="font-bold"><?=$numero?></span>?</h2>
            </div>

            <input type="hidden" value="<?= $intentos ?>" name="intentos">
            <input type="hidden" value="<?= $numMin ?>" name="min">
            <input type="hidden" value="<?= $numMax ?>" name="max">
            <input type="hidden" value="<?= $numero ?>" name="num">
            <input type="hidden" value="<?= $jugada ?>" name="jugada">

            <fieldset id="adivina" class="bg-gray-100 p-4 rounded-lg mb-4">
                <legend class="text-lg font-semibold mb-2">El número a adivinar es</legend>
                <label class="flex items-center mb-2">
                    <input type="radio" checked class="radio radio-primary mr-2" name="resultado"
                           value=">" <?php if($_POST["resultado"]??""===">") echo "checked"?> >
                    <span>Mayor</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" class="radio radio-primary mr-2" name="resultado"
                           value="<" <?php if($_POST["resultado"]??null==="<") echo "checked"?> >
                    <span>Menor</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" class="radio radio-primary mr-2" name="resultado" value="=">
                    <span>Igual</span>
                </label>
            </fieldset>

            <div class="flex space-x-4 mt-6">
                <input type="submit" value="Jugar" name="submit" class="btn btn-primary flex-1">
                <input type="submit" value="Reiniciar" name="submit" class="btn btn-secondary flex-1">
                <input type="submit" value="Volver" name="submit" class="btn btn-accent flex-1">
            </div>
        </form>
    </div>
</div>
</body>
</html>
