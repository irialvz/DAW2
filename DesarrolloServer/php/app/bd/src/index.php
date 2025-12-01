<?php
require "./../vendor/autoload.php";

use Class\baseDatos\Bd;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
//var_dump($_ENV);

$bd = BD::getInstance();
$tablas = $bd->getAllTables();

$contenido = [];
if (isset($_POST['submit'])){
    $tabla = $_POST['submit'];
    $resultado = $bd->getTableContent($tabla)??null;
    if (is_array($resultado)){

        $contenido = $resultado;
    }else {
        $contenido = null;
    }
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
    <style>
        * {
            font-family: Inter, sans-serif;
        }

        .nav {
            background: #cccccc;
            height: 5vh;

        }
        .nav-container {
            display: flex;
            flex-direction: row;
        }
        fieldset {
            width: 50vh;
        }

        .celdaBotones {
            display: flex;
            flex-direction: row;
            justify-content: space-around;

        }
        .celdaBotones
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: left;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .celdaBotones input {
            border-radius: 20px;
            padding: 10px;
            background: lightskyblue;
            font-weight: bold;
        }

        th, td {
            padding: 12px 15px;
        }

        th {
            background-color: #4A90E2;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }

        td {
            background-color: #fff;
            color: #333;
            border-bottom: 1px solid #f2f2f2;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f7ff;
            transition: 0.3s;
        }

    </style>
</head>
<nav class="nav">
    <div class="nav-container">
        <ul class="nav-links">
            <li><a >Iria Alvarez</a></li>
        </ul>
        <a href="#" class="nav-btn">Login</a>
    </div>
</nav>
<body>

<h1>Gestor de  base de datos</h1>
 <fieldset>
   <legend></legend>
   <form action="index.php" method="post">
       <div class="celdaBotones">
           <?php
           foreach ($tablas as $nombreTabla) {

               echo "<input type=\"submit\" name=\"submit\"  value=\"$nombreTabla[0]\">";

           }
           ?>
       </div>

   </form>
  </fieldset>
 <?php

 if (!empty($contenido)){
     echo "<table>";
     echo "<th>$tabla</th>";
     $columnas = [$bd->getColumns($tabla)];
//     var_dump($columnas);
     echo "<tr>";
     foreach ($columnas as $columna) {
         foreach ($columna as $column) {
             echo "<th>$column[0]</th>";
         }
     }
     echo "</tr>";
     foreach($contenido as $cont){
         echo "<tr>";
         foreach ($cont as $celda) {
             echo "<td>$celda</td>";
         }
     }
     echo "</tr>";

     echo "</table>" ;
 } else {
     echo "No se encontraron tablas";

 }
 ?>


</body>
</html>
