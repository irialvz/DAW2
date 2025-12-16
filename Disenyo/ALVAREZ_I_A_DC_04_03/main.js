let player;

$(document).ready(function () {

  player = new Plyr('#video', {
    captions: { active: true }
  });

  // Reproductor oculto al iniciar
  $("#reproductor").addClass("oculto");

  // Mostrar / ocultar reproductor
  $("#toggle").on("click", function () {
    $("#reproductor").toggleClass("oculto");
  });

  // Play con validación de permisos
  $("#play").on("click", function () {
    if (!$("#permiso").is(":checked")) {
      alert("Debes aceptar reproducir contenido multimedia antes de continuar.");
      return;
    }
    player.play();
  });

  $("#pause").on("click", function () {
    player.pause();
  });

  // Información del vídeo
  setInterval(function () {
    if (player.duration) {
      let actual = player.currentTime.toFixed(1);
      let total = player.duration.toFixed(1);
      let porcentaje = ((actual / total) * 100).toFixed(1);

      $("#info").text(
        "Tiempo: " + actual + "s / " + total + "s (" + porcentaje + "%)"
      );
    }
  }, 1000);

  // Lista de vídeos
  $("#listaVideos li").on("click", function () {
    let src = $(this).data("src");

    player.source = {
      type: 'video',
      sources: [{ src: src, type: 'video/mp4' }]
    };

    $("#listaVideos li").removeClass("activo");
    $(this).addClass("activo");

    console.log("Vídeo cargado:", src);
  });

});
