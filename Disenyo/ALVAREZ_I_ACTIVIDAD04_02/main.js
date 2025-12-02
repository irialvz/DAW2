$(document).ready(function () {
    $(".caja").each(function (index, element) {
    // Al hacer clic
    $(element).on("click", function () {
      $(this).toggleClass("resaltada");
      console.log("Caja clicada. Índice: " + index);
    });

    $(element).hover(
      function () {
        $(this).css("background-color", "#b3e5fc"); // Azul claro
      },
      function () {
        $(this).css("background-color", "");
      }
    );
  });

  // Ejercicio 3. Botones globales
  $("#btn-highlight-all").click(function () {
    $(".caja").addClass("resaltada");
  });

  $("#btn-hide-all").click(function () {
    $(".caja").removeClass("resaltada");
  });

  $("#btn-toggle-all").click(function () {
    $(".caja").toggleClass("resaltada");
  });

  // Ejercicio 4. Manejo de errores
  console.log("\n--- Ejercicio 4: Manejo de errores ---");
  var selectorInexistente = $("#elemento-que-no-existe");

  console.log(
    "Intento de selección de '#elemento-que-no-existe':",
    selectorInexistente
  );
  console.log(
    "Propiedad length del objeto devuelto:",
    selectorInexistente.length
  );

  if (selectorInexistente.length === 0) {
    console.log(
      "El elemento no existe, pero jQuery no lanza error, devuelve un objeto vacío."
    );
  }
});