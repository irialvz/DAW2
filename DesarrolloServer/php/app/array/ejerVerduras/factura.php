
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php

        // Definir algunas variables
        $fecha = date("d/m/Y");
        $factura = "Factura del cliente";
        foreach ($datos as $verduras => $informacion){

        }

        // Calcular totales con IVA
        $total_base = $precio1 + $precio2;
        $iva = $total_base * 0.21;
        $total = $total_base + $iva;

        // Formatear números con dos decimales y comas
        $total_base = number_format($total_base, 2);
        $iva = number_format($iva, 2);
        $total = number_format($total, 2);
        $precio1 = number_format($precio1,2);
        $precio2 = number_format($precio2,2);

        // Ancho de alineación para los precios
        $alignWidth = 21; // Ajusta este valor según el ancho deseado para la alineación
        $producto1=str_pad($producto1,$alignWidth," ",STR_PAD_RIGHT);
        $producto2=str_pad($producto2,$alignWidth," ",STR_PAD_RIGHT);
        $iva = str_pad($iva,6," ",STR_PAD_LEFT);
        $precio1 = str_pad($precio1,6," ",STR_PAD_LEFT);
        $precio2 = str_pad($precio2,6," ",STR_PAD_LEFT);
        $total_base = str_pad($total_base,6," ",STR_PAD_LEFT);
        $total = str_pad($total,6," ",STR_PAD_LEFT);


        // Usar heredoc para mostrar el ticket
        $ticket = <<<FIN
<pre>
========================================
     FACTURA Número: $factura
========================================

Fecha: "$fecha"

Productos:
$producto1 $precio1$
$producto2 $precio2$
</ol>
Subtotal:             $total_base$
IVA (21%):            $iva$
--------------------------------
Total a pagar:        <strong>$total$</strong>

Gracias por su compra!
========================================
</pre>
FIN;

        // Mostrar el ticket
        echo $ticket;


        ?>
    </div>

</div>
</body>
</html>