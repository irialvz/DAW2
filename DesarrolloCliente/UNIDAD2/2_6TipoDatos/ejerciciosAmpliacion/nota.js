let error = false;
let NotaProyecto = prompt("Nota del proyecto");
if (isNaN(NotaProyecto) || NotaProyecto < 0 || NotaProyecto > 10) {
    error = true;
    alert("Numero invalido");
}
let NotaExamen = prompt("Nota del examen");
if (isNaN(NotaProyecto) || NotaProyecto < 0 || NotaProyecto > 10) {
    error = true;
    alert("Numero invalido");
}
let mediaResultante = 0.0;
let calificacion = "";
if (!error) {
    mediaResultante = (NotaProyecto * 0.60) + (NotaExamen * 0.40);
    if (NotaProyecto < 4, 5 || NotaExamen < 4, 5) {
        calificacion = "Suspenso"
    } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante < 5) {
        calificacion = "Suspenso"
    } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante >= 5 && mediaResultante < 7) {
        calificacion = "Aprobado";
    } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante >= 5 && mediaResultante >= 7 && mediaResultante <= 9) {
        calificacion = "Notable";
    } else {
        calificacion = "Sobresaliente";
    }
    document.getElementById("media").innerHTML = "<strong> La media resultante es </strong>" + mediaResultante;
    document.getElementById("calificacion").innerHTML = "<strong> La calificacion es </strong>" + calificacion;

}
