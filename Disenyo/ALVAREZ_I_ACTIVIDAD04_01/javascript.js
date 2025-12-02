//Ejercicio 1. Preparación del proyecto
//Ejercicio 2. Recorrer y mostrar información del DOM
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
    console.log("\nEjercicio 3: Manipulación básica: get() y prevObject");
  var primerLi = $("li").get(0);
  console.log("Primer LI con get(0):", primerLi);
  var seleccion = $("ul").find("li");
  console.log("prevObject de $('ul').find('li'):", seleccion.prevObject);
  $("li").eq(0).text("Elemento 1 Modificado");

  console.log("\nEjercicio 4: Interacción con el botón");
  $("#info").click(function () {
    console.log("Click en Mostrar info:");
    $("li").each(function (index) {
      console.log(index + ": " + $(this).text());
    });
  });
  $("#elemento").click(function () {
    var numElementos = $("li").length + 1;
    $("ul").append("<li>Elemento " + numElementos + "</li>");
  });
});
