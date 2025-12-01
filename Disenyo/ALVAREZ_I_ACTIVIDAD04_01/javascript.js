// Iniciar cuando el documento esté completamente cargado
$(document).ready(function() {
    console.log("=== Recorriendo elementos <li> originales ===");
    
    // Seleccionar todos los <li> y recorrerlos con each()
    $('li').each(function(index) {
        const textoElemento = $(this).text();
        console.log("Índice: " + index + " | Texto: " + textoElemento);
    });
    
    // Añadir un <li> nuevo a la lista
    console.log("\n=== Añadiendo nuevo <li> ===");
    $('ul').append('<li>Nuevo elemento jQuery añadido</li>');
    
    // Volver a recorrer todos los <li> después de añadir el nuevo
    console.log("\n=== Recorriendo elementos <li> después de añadir uno nuevo ===");
    $('li').each(function(index) {
        const textoElemento = $(this).text();
        console.log("Índice: " + index + " | Texto: " + textoElemento);
    });
});
