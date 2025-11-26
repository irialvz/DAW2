<?php
/*La empresa VetCare Pro, una red de clínicas veterinarias, ha solicitado el desarrollo de un sistema web interno (MVP) en PHP para 
digitalizar el registro de mascotas y sus revisiones médicas, evitando la gestión en papel. 
Debes implementar obligatoriamente una solución modular y estructurada que use Programación Orientada a Objetos, operadores, 
estructuras de control, iteraciones clásicas (for o while, no for-each), funciones, arrays y formularios (GET o POST). 

El sistema permitirá registrar mascotas (nombre, especie, edad, estado con valores permitidos: sana, tratamiento, urgente) 
y registrar una revisión inicial (fecha, peso, diagnóstico, veterinario, coste base),
 almacenando los datos en memoria usando los arrays $mascotas = [] y $revisiones = []. 
 
 Se deberán crear al menos dos clases relacionadas: Mascota (con atributos indicados y métodos mínimos cambiarEstado($nuevoEstado) y mostrarDatos()) 
 y Revision (con atributos indicados y método mínimo calcularCosteFinal($impuesto = 21) que devuelva el coste aplicando el porcentaje de impuesto). 
 
 Debes recoger los datos desde un formulario, validarlos (nombre no vacío, edad numérica y mayor que 0, estado dentro de los permitidos usando if encadenado o switch), 
 y mostrar en un fichero listado.php todas las mascotas con sus datos, su revisión asociada y el coste final calculado con impuesto, además de imprimir mensajes 
 condicionales según estado: "La mascota requiere atención inmediata" si el estado es urgente y "La mascota sigue un plan de tratamiento" si está en tratamiento. 
 
 El recorrido de los arrays debe hacerse con iteraciones clásicas for o while, mostrando la información de forma clara en pantalla y realizando los cálculos requeridos.
  También se valorarán extras opcionales como cambio de estado mediante formulario adicional, filtrado de mascotas en tratamiento o aplicar un descuento del 10% si el coste base es mayor que 50.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>