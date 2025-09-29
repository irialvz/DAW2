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
        <th>Numero</th>
        <th>Codigo</th>
    </tr>
    <?php
    for ($numero = 33; $numero <= 100; $numero++){
        $caracter = chr($numero);
        /*    $hexadecimal = dechex($numero);
            $binario = decbin($numero);
            $octal = decoct($numero);

            echo "<tr>";
            echo "<td>$numero</td><td>$hexadecimal</td><td>$binario</td><td>$octal</td>";
            echo "</tr>";*/
        echo "<tr>";
        echo "<td>$numero</td><td>$caracter</td>";
        echo "</tr>";

    }

    ?>
</table>


</body>

</html>