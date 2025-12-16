$(document).ready(function () {

    // Click en cajas
    $(".caja").each(function (index) {
        $(this).on("click", function () {
            $(this).toggleClass("resaltada");
            console.log("Caja clicada: " + index);
        });

        $(this).hover(
            function () {
                $(this).css("background-color", "#ccc");
            },
            function () {
                $(this).css("background-color", "");
            }
        );
    });

    // Botones globales
    $("#resaltar").on("click", function () {
        $(".caja").addClass("resaltada");
    });

    $("#ocultar").on("click", function () {
        $(".caja").removeClass("resaltada");
    });

    $("#alternar").on("click", function () {
        $(".caja").toggleClass("resaltada");
    });

    // Elemento inexistente
    console.log($("#noExiste"));

});
