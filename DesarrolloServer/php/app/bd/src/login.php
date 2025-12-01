<?php
require "./../vendor/autoload.php";

use Class\baseDatos\Bd;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
session_start();
$usuario = $_SESSION['usuario']??null;
//if (is_null($usuario)) {
//    header('location: login.php');
//    exit;
//}
$msj = "";
$bd = BD::getInstance();
if (isset($_POST['submit'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    switch ($_POST['submit']) {
        case 'Iniciar':{
            $login = $bd->logearse($usuario, $password);
            if($login){
                header("location: index.php");
                $_SESSION['usuario'] = $usuario;
            }
            break;
        }
        case 'Registrar':{
            $registro = $bd->registrarse($usuario, $password);
            $registro ? header("location: index.php") : $msj = "No se pudo registrarse";
            break;
        }

    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-100">

<div class="w-full max-w-sm bg-white p-6 rounded-2xl shadow-lg">
    <fieldset>
        <legend class="text-2xl font-bold text-center text-gray-700 mb-4">Iniciar Sesión</legend>

        <form action="login.php" method="post" class="flex flex-col gap-4">

            <div class="flex flex-col">
                <label class="text-gray-600 font-medium mb-1">Nombre usuario</label>
                <input name="usuario" type="text" required
                       class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="flex flex-col">
                <label class="text-gray-600 font-medium mb-1">Password</label>
                <input name="password" type="password" required
                       class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" name="submit" value="Iniciar"
                    class="bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition">
                Iniciar
            </button>
            <button type="submit" name="submit" value="Registrar"
                    class="bg-white-500 border border-blue-500 text-black py-2 rounded-lg font-semibold hover:bg-blue-300 transition">
                Registrar
            </button>

        </form>

        <?php if($msj): ?>
            <p class="text-red-500 text-center font-medium mt-4"><?= $msj ?></p>
        <?php endif; ?>

    </fieldset>
</div>

</body>
</html>
