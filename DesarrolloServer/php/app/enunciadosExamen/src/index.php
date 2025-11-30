<?php
require __DIR__ . '/../vendor/autoload.php';

use enunciadosExamen\Class\enunciado\Mascota;
use enunciadosExamen\Class\enunciado\Revision;

$error = false;
$mostrarFormRevision = false;
$nuevaMascota = $_SESSION["mascota"] ?? null;
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombreMascota'];
    $especie = $_POST['especieMascota'];
    $edad = $_POST['edadMascota'];
    $estado = $_POST['estadoMascota'];
    if (empty($nombre) || !is_numeric($edad) || empty($especie)) {
        $error = true;
        $msj = "Valores invalidos";
    }
    if (!$error) {
        $mascota = new Mascota($nombre, $especie, $edad, $estado);
        $_SESSION["mascota"]=$mascota;
        $msj = "Se ha creado la nueva mascota " . $mascota->mostrarDatos();
    }

}
if ($mascota??null){
    $mostrarFormRevision=true;
}
$errorRevision = false;
if (isset($_POST['submitRevision'])) {
    //TODO
    $fecha = $_POST["fechaRevision"];
    $peso = $_POST["pesoMascota"];
    $diagnostico = $_POST["diagnosticoMascota"];
    $veterinario = $_POST["veterinarioRevision"];
    if (empty($fecha) || !is_numeric($peso) || empty($diagnostico) || empty($veterinario)){
        $errorRevision = true;
        $msj = "Valores invalidos";
    }
    if (!$errorRevision){
        $nuevaRevision = new Revision($fecha,$peso,$diagnostico,$veterinario);
        $mascota->setPrimeraRevision($nuevaRevision);
        $_SESSION["mascota"]=$mascota;
        $msj = "Se han agregado los datos de revision en la mascota ".$mascota->mostrarDatos();
    }
    //se crea un obj revision y se asigna a la mascota con el set
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mascota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 flex flex-col md:flex-row items-start justify-center rounded-lg shadow-md w-full max-w-6xl gap-8">
    <div class="m-4 w-full md:w-80"">
        <form action="" method="post" class="space-y-4">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Registrar Mascota</h1>
            <!-- Nombre -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Nombre:</label>
                <input type="text" name="nombreMascota"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Especie -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Especie:</label>
                <input type="text" name="especieMascota"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Edad -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Edad:</label>
                <input type="number" name="edadMascota"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Estado -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Estado:</label>
                <select name="estadoMascota"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option disabled selected>Selecciona estado</option>
                    <option value="sana">Sana</option>
                    <option value="tratamiento">Tratamiento</option>
                    <option value="urgente">Urgente</option>
                </select>
            </div>

            <!-- Botón -->
            <button type="submit" name="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition-colors">

                Introducir Mascota
            </button>
        </form>
    </div>

    <?php if ($mostrarFormRevision): ?>
    <div class="m-4 w-full md:w-80"">
        <form action="" method="post" class="space-y-4">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Registrar Revision</h1>

            <!-- Especie -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Fecha:</label>
                <input type="text" name="fechaRevision"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Edad -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Peso:</label>
                <input type="number" name="pesoMascota"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Diagnostico:</label>
                <input type="text" name="diagnosticoMascota"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Veterinario:</label>
                <input type="text" name="veterinarioRevision"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>


            <!-- Botón -->
            <button type="submit" name="submitRevision"
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition-colors">
                Introducir Revision
            </button>
        </form>
    </div>

    <?php endif; ?>

</div>


</body>
</html>

