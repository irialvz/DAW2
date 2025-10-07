let numeros = [];
const limite = 30;
for (let i=0;i<= limite;i++){
    numeros.push(i);
}
document.getElementById("numeros").innerHTML += numeros.join(",");
