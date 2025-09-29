<!--en la parte de arriba pondremos las declaraciones-->
<?php
$hRandom = rand(1,6);
$rgbRojo = dechex(rand(1,255));
if (strlen($rgbRojo) == 1) { $rgbRojo = "0".$rgbRojo; };

$rgbAzul= dechex(rand(1,255));
if (strlen($rgbAzul) == 1) { $rgbAzul = "0".$rgbAzul; };

$rgbVerde= dechex(rand(1,255));
if (strlen($rgbVerde) == 1) { $rgbVerde= "0".$rgbVerde; };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prueba</title>
</head>
<body>
<!--en el html solo tendremos las salidas-->
<?php
echo "<h$hRandom style= \"color: #$rgbRojo$rgbAzul$rgbVerde\" > esto es un titulo de tamaño y color aleatorio </h$hRandom>";

?>

</body>

</html>