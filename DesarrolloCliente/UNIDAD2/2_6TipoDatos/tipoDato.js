console.log("A la gente de Zaragoza se les llama `Maños`");
console.log("Nacimos en los 70`s");
console.log("A la gente de Zaragoza se les llama \"Maños\" Nacimos en los 70's");
console.log('"Maños" de los 70\'s');
// 5) Concatenar palabras en una misma frase
let b = "hola"
console.log(b + " " +b );
console.log(b.concat(" " +b));
// 6) Calcular longitud de un string (variable.length)
let txt = "AJSDAHDJAGHJS";
console.log("La variable tiene longitud de " + txt.length);
// 7) Cambiar color a la página
// document.body.style.backgroundColor = "red";

// Crear un script que emita un aviso en el que detalle la siguiente la afirmación:
// <El número “µ” tiene un valor de 3,14….>
let pi = Math.PI;
//alert("<El numero \'\xB5' tiene un valor de "+ pi + ">");
console.log("Hola\n \"buenas tardes\" mi \t nombre 'es iria'");

let x = 123;

//document.getElementById("demo").innerHTML -> recuperar datos del html para modificarlos 
    // document.getElementById("demo").innerHTML = x.toString() + "<br>" + 
    // (100 + 23).toString() ;
let text = x.toString();
document.getElementById("demo").innerHTML= text + "hola";
