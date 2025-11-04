<?php
$nombreContacto = trim($_POST["nombre"]??"");
$telefonoContacto = $_POST["telefono"]??"";
$telefonoContacto = (int) $telefonoContacto;
$contactos = $_POST["contactos"]??[];


function agenda (array &$contactos,string $nombre,int$telefono):void{
    if (!array_key_exists($nombre, $contactos)) {
        $contactos[$nombre] = $telefono;
    } else if ($telefono === "") {
        unset($contactos[$nombre]);
    } else {
        $contactos[$nombre] = $telefono;
    }
};
function validar_error(array &$contactos,string $nombre,int$telefono):null|string{
    $error=null;
    $error = $nombre ==""? "El nombre no puede estar vacio <br/>":$error;
    $error = is_numeric($telefono)? "El telefono debe ser numerico <br/>":$error;
    $error = (!isset($contactos[$nombre])&&($telefono==""))? "No se puede eliminar un contacto sin numero <br/>":$error;
    $error = (in_array($telefono,$contactos))? "No se puede eliminar un contacto sin numero <br/>":$error;
    return $error;
}

if (isset($_POST['submit'])){
    if($nombreContacto != "" && $telefonoContacto != ""){

        agenda($contactos,$nombreContacto, $telefonoContacto);
        $cantidad = sizeof($contactos)==0 ? "sin" : +sizeof($contactos);
        $plural = sizeof($contactos)==1 ? "contacto" : "contactos";
    }
}
$habilitarBoton = empty($contactos)? "disabled" : " ";
if (isset($_POST['eliminar']) && !empty($contactos)){
    // Se podrán borrar todos los contactos de la agenda. El botón borrar contactos sólo estará habilitado si hay contactos en la agenda
        foreach ($contactos as $contacto){
            unset($contactos[$contacto]);
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
</head>
<body>
    <header style="background-color:lightskyblue;padding:15px; color: black; display: flex;justify-content: center;">
        <h1>Agenda de contactos: <?= $cantidad??"sin contactos"?> <?=$plural??""?></h1>
    </header>
    <div style="display: flex; justify-content: space-between">
        <fieldset style="width: 30%">
            <legend>Nuevo contacto</legend>
            <form action="agenda.php" method="post">
            Nombre <input type="text" name="nombre">
            Telefono <input type="text" name="telefono" >

            <button type="submit" name="submit">Añadir contacto</button>
            <button  <?=$habilitarBoton ?> name="eliminar">Eliminar contacto</button>
            </form>
        </fieldset>
        <div style="width: 50%;background-color:mediumslateblue;display: flex;justify-content: center; flex-direction: column;">
            <h1>Listado de contactos</h1>
            <?php if (!empty($contactos)){
                foreach ($contactos as $contacto => $telefono){
                    echo "<input type='hidden' name='contactos[$contacto]' value='".$telefono."'>";
                    echo "<table style='display: flex;justify-content: left;border: 3px solid black;width: 20%; '>";
                    echo "<tr>";
                    echo "<th>Nombre</th>";
                    echo "<th>Telefono</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $contacto . "</td>";
                    echo "<td>" . $telefono . "</td>";
                    echo "</tr>";
                    echo "</table>";
                }
            }else {
                echo "No hay registros";
            };
            ?>
        </div>
    </div>

</body>
</html>
