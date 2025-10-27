<?php
$url = "verduras.json";
$contenido = file_get_contents($url);

//pasar json a un array
$datos = json_decode($contenido, true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda verduras</title>
</head>
<body style="margin: 10%">

<?php
if (!isset($_POST['submit'])):?>
    <?php mostrarFormulario($datos); ?>
<?php else: ?>
<?php
    mostrarFactura();
    mostrarInventario();
endif;
?>
</body>
</html>
<?php
function mostrarFormulario($datos){
    echo " 
    <fieldset>
      <legend>Compra de verduras</legend>
      <form>";

    echo "Prodcuto: <select name='prodcuto'>";
    foreach ($datos as $verduras => $informacion) {
        echo "<option value='$verduras'>$verduras</option>";
    }
    echo "</select>";
    echo "</br>Unidades: <input type='number' name='unidades'>";
    echo "</br><input type='submit' name='submit' value='Comprar'>";
      echo "</form>
    </fieldset>
    ";

}
function mostrarFactura(){

}
?>