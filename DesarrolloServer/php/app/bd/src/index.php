<?php
require "./../vendor/autoload.php";

use Class\baseDatos\Bd;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

session_start();
$usuario = $_SESSION['usuario']??null;
if (is_null($usuario)) {
    header('location: login.php');
    exit;
}

$bd = BD::getInstance();
$tablas = $bd->getAllTables();
$contenido = [];

if (isset($_POST['submit'])){
    $tabla = $_POST['submit'];
    $resultado = $bd->getTableContent($tabla) ?? null;
    $contenido = is_array($resultado) ? $resultado : null;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor BD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<!-- NAV -->
<nav class="bg-blue-600 h-14 flex items-center shadow-md px-6 justify-between">
    <ul class="text-white font-medium">
        <li class="px-3 py-1 bg-blue-500 rounded-lg"><?=$usuario?></li>
    </ul>
    <a href="login.php"
       class="bg-white text-blue-600 font-semibold px-4 py-1.5 rounded-lg hover:bg-gray-200 transition">
        Login
    </a>
</nav>

<!-- CONTENIDO -->
<div class=" mx-auto mt-8 px-4">

    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">
        Gestor de Base de Datos
    </h1>

    <!-- BOTONES TABLAS -->
    <fieldset class="bg-white p-5 rounded-2xl shadow-md border border-blue-500 mb-6">
        <form action="index.php" method="post">
            <div class="flex flex-wrap justify-center gap-3">
                <?php foreach ($tablas as $nombreTabla): ?>
                    <input type="submit"
                           name="submit"
                           value="<?=$nombreTabla[0]?>"
                           class="px-4 py-2 rounded-full bg-blue-400 text-white font-bold hover:bg-blue-500 transition cursor-pointer">
                <?php endforeach; ?>
            </div>
        </form>
    </fieldset>

    <!-- TABLA RESULTADOS -->
    <?php if (!empty($contenido)): ?>
        <div class="overflow-auto rounded-2xl shadow-lg border border-blue-500">
            <table class="w-full bg-white text-sm md:text-base">

                <!-- HEADER -->
                <thead class="bg-blue-600 text-white uppercase text-xs md:text-sm">
                <tr>
                    <th colspan="<?=count($contenido[0])?>" class="px-4 py-3 text-center text-lg">
                        <?=$tabla?>
                    </th>
                </tr>
                <tr>
                    <?php
                    $cols = $bd->getColumns($tabla);
                    foreach ($cols as $column): ?>
                        <th class="px-4 py-2"><?=$column[0]?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>

                <!-- BODY -->
                <tbody>
                <?php foreach ($contenido as $fila): ?>
                    <tr class="border-b hover:bg-blue-50 transition">
                        <?php foreach ($fila as $celda): ?>
                            <td class="px-4 py-2 text-gray-700"><?=$celda?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    <?php else: ?>
        <p class="text-center text-gray-600 font-medium mt-10">
            No se encontraron tablas o no se seleccionó ninguna.
        </p>
    <?php endif; ?>

</div>

</body>
</html>
