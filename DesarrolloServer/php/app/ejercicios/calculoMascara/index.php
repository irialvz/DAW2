<?php
if (isset($_POST["submit"])) {
    $mask1 = $_POST["masc1"]??0;
    $mask2 = $_POST["masc2"]??0;
    $mask3 = $_POST["masc3"]??0;
    $mask4 = $_POST["masc4"]??0;
    //recoger ip
    $ip1 = $_POST["ip1"]??0;
    $ip2 = $_POST["ip2"]??0;
    $ip3 = $_POST["ip3"]??0;
    $ip4 = $_POST["ip4"]??0;

    $red1= $mask1 & $ip1;
    $red2= $mask2 & $ip2;
    $red3= $mask3 & $ip3;
    $red4= $mask4 & $ip4;


    $mensaje = printf("%b & %b = %b",$mask1,$ip1,$red1);
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
<form action="index.php" method="post">

    Mascara de red
    <input min="0" max="255" size="3" type="number" value="255" name="masc1">
    <input min="0" max="255" size="3" type="number" value="255" name="masc2">
    <input min="0" max="255" size="3" type="number"  value="255" name="masc3">
    <input min="0" max="255" size="3" type="number" value="255" name="masc4">
    <br>
    Direccion IP
    <input min="0" max="255" size="3" type="number" name="dir1">
    <input min="0" max="255" size="3" type="number" name="dir2">
    <input min="0" max="255" size="3" type="number" name="dir3">
    <input min="0" max="255" size="3" type="number" name="dir4">
    <br>
    <button type="submit">Comprobar</button>
</form>
<?php
if(!is_null($mensaje)):?>
    <h1>RESULTADO</h1>
    <?= $mensaje;endif?>

</body>
</html>
