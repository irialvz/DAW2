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
if (isset($_POST['submit'])){
    mostrarFactura($datos);
    mostrarInventario($datos);
} else {
    mostrarFormulario($datos);

}
?>
</body>
</html>
<?php
function mostrarFormulario($datos){
    echo " 
    <fieldset>
      <legend>Compra de verduras</legend>
      <form action='tiendaVerduras.php' method='post'>";

    foreach ($datos as $verduras => $informacion) {
        echo "$verduras (disponibles $informacion[unidades])</br><input value='' name='$verduras'></input></br>";
    }
    echo "</br><input type='submit' name='submit' value='Comprar'>";
      echo "</form>
    </fieldset>
    ";

}
function mostrarFactura($datos){
    $total=0;
    $factura="<fieldset><legend>Factura de cliente</legend>";
    foreach ($datos as $verduras => $informacion){
        $precio = $informacion["precio"];
        $unidades = $informacion["unidades"];
        $cantidadSolicitada = $_POST[$verduras];
        $cantidadSolicitada = (int) $cantidadSolicitada;
        $cantidadSolicitada = $cantidadSolicitada > $unidades ? $unidades : $cantidadSolicitada;
        $subtotal = $cantidadSolicitada * $precio;
        if ($cantidadSolicitada > 0){
            $factura.="<p>$cantidadSolicitada $verduras a $precio = $subtotal</p>";
        }
        $total+=$subtotal;
        $unidades -= $cantidadSolicitada;
    }
    $factura.="<h3>Total de la factura: $total</h3>";
    $factura.="</fieldset>";
    echo $factura;

}
function mostrarInventario($datos){
    $inventario="<fieldset><legend>Inventario de la tienda</legend>";
    foreach ($datos as $verduras => $informacion){
        $unidades = $informacion["unidades"];
        $cantidadSolicitada = $_POST[$verduras];
        $cantidadSolicitada = (int) $cantidadSolicitada;
        $cantidadSolicitada = $cantidadSolicitada > $unidades ? $unidades : $cantidadSolicitada;
        $unidades -= $cantidadSolicitada;
        $inventario.="<p>$unidades de $verduras actualmente</p>";
    }
    $inventario.="</fieldset>";
    echo $inventario;
}
?>