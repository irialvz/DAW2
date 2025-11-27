<?php
require "./../vendor/autoload.php";

use Class\baseDatos\Bd;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
var_dump($_ENV);

$bd = BD::getInstance();
$tablas = $bd->getAllTables();
if (isset($_POST['submit'])){
    $tabla = $_POST['submit'];
    $contenido = $bd->getTableContent($tabla);
    var_dump($contenido);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <fieldset>
   <legend></legend>
   <form action="index.php">
       <?php
       foreach ($tablas as $tabla) {
           echo "<input type=\"submit\" name=\"submit\"  value=\"$tabla\">";

       }
       ?>
   </form>
  </fieldset>

 <script>

 </script>
</body>
</html>
