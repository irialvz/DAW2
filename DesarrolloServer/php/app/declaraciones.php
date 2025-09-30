<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prueba</title>
</head>
<body>
<h1>Lista codigo ASCII</h1>
<table>
    <tr>
        <th>Entero</th>
        <th>Binario</th>
        <th>Octal</th>
        <th>Hexadecimal</th>
    </tr>
    <?php
//    declarar constantes
    const  IVA = 0.16;
    echo "<h1>El valor del iva es ".IVA."</h1>";
    echo "<h1></h1>";
    for ($numero = 0; $numero <= 50; $numero++){
//        cambiar el prinf y formatear numero
        $num_binario = decbin($numero);
        $num_oct = decoct($numero);
        $num_hext = dechex($numero);
        printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",  $numero , $num_binario,$num_oct,$num_hext);


    }

    ?>
</table>


</body>

</html>