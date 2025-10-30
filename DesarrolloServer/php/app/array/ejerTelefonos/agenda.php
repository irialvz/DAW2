<?php
$nombreContacto = $_POST["nombre"]??"";
$telefonoContacto = $_POST["telefono"]??"";
$contactos = [];
if (isset($_POST['submit'])){
    if($nombreContacto != "" && $telefonoContacto != ""){
        $telefonoContacto = (int) $telefonoContacto;
        $contactos= agenda($nombreContacto, $telefonoContacto);
    }
}
if (isset($_POST['reset'])){
    if (!empty($contactos)){
        //todo bucle para unset cada valor
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
        <h1>Agenda de contactos con: //todo variable contador contactos // contactos</h1>
    </header>
    <div style="display: flex; justify-content: space-between">
        <fieldset style="width: 30%">
            <legend>Nuevo contacto</legend>
            Nombre <input type="text" name="nombre">
            Telefono <input type="text" name="telefono" >
            <button type="submit" name="submit">Añadir contacto</button>
            <button type="reset" name="reset">Eliminar contacto</button>
        </fieldset>
        <div style="width: 50%;background-color:mediumslateblue;display: flex;justify-content: center; flex-direction: column;">
            <h1>Listado de contactos</h1>
            <p> blablavbla</p>
        </div>
    </div>

</body>
</html>
<?php

function agenda(string $nombre,int$telefono):array{
    $agenda = [];
//    Se podrán borrar todos los contactos de la agenda.
//    El botón borrar contactos sólo estará habilitado si hay contactos en la agenda
    if (!array_key_exists($nombre, $agenda)){
        // Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
        $agenda[$nombre] = $telefono;
    } else if (array_key_exists($nombre, $agenda) && is_null($telefono)){
        //    Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.
            unset($agenda[$nombre]);
    }else if (array_key_exists($nombre, $agenda) && !is_null($telefono)){
        //    Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.
        $agenda[$nombre] = $telefono;
    }



}

?>