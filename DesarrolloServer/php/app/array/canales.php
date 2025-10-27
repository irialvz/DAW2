<?php
$url = "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
$contenido = file_get_contents($url);

//pasar json a un array
$datos = json_decode($contenido, true);
foreach ($datos as $lista) {
    $tipoCadena = $lista["name"];
    echo "<h1>$tipoCadena</h1>";
    echo "<div style='display: flex; flex-direction: row;'>";

    foreach ($lista["channels"] as $canal) {
        $nombreCanal = $canal["name"];
        $logo = $canal["logo"];
        $url = $canal["web"];

        echo "<div style='text-align: center;'>";
        echo "<a href='$url' target='_blank'><img src='$logo' style=' width:200px;height:200px;'></a>";
        echo "<p>$nombreCanal</p>";
        echo "</div>";
    }
    echo "</div>";

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canales</title>
</head>
<body>
</body>
</html>
