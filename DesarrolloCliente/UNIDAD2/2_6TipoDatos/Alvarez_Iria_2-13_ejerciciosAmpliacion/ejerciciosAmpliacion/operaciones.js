//FOR - TABLA DEL 7
let resultado7 = 0;
for (let i=1;i<=10;i++){
    resultado7 = 7 * i;
    document.getElementById("linea7").innerHTML += "7 x " + i + " = "+ resultado7 +"<br>";
}

//While
let resultado8 = 0;
let x = 1;
while ( x <= 10){
    resultado8 = 8*x;
    document.getElementById("linea8").innerHTML += "8 x " + x + " = "+ resultado8 +"<br>";
    x++;
}

//Do while
let resultado9 = 0;
let y = 1;
do {
    resultado9 = 9*y;
    document.getElementById("linea9").innerHTML += "9 x " + y + " = "+ resultado9 +"<br>";
    y++;
} while (y <= 10);

//primer desplazamiento
let primerDesplazamientoDivision = 125>>Math.log2(8);
document.getElementById("desplazamientoDivision1").innerHTML += "<strong>125/8 con desplazamiento de bits</strong><br>"+primerDesplazamientoDivision;
let segundoDesplazamientoDivision = 25>>Math.log2(2);
document.getElementById("desplazamientoDivision2").innerHTML += "<br><strong>25/2 con desplazamiento de bits</strong><br>"+segundoDesplazamientoDivision;
let primerDesplazamientoMultiplicacion= 40<<Math.log2(4);
document.getElementById("desplazamientoMultiplicacion1").innerHTML += "<strong>40 x 4 con desplazamiento de bits</strong><br>"+primerDesplazamientoMultiplicacion;
let segundoDesplazamientoMultiplicacion = 10<<Math.log2(16);
document.getElementById("desplazamientoMultiplicacion2").innerHTML += "<strong>10 x 16con desplazamiento de bits</strong><br>"+segundoDesplazamientoMultiplicacion;
