import { CentroComercial } from "./CentroComercial.js";
console.log("CREACION DE UN CENTRO COMERCIAL")
let nuevoCC = new CentroComercial("Puerto Venecia","Z-40",3,50008);
console.log(nuevoCC.mostrarInfoCompleta());
console.log(nuevoCC.mostrarNumeroPlantas());
console.log("-----------AGREGAR PLANTAS-----------")
let agregado = nuevoCC.agregarPlantasYLocales(2,4);
console.log(agregado ? "Agregando 2 plantas y 4 locales por planta" : "No se han agregado plantas");
console.log("----------MODIFICAR NOMBRE CC----------");
try{
    console.log(`Nombre antes: ${nuevoCC.mostrarNombre()}`);
    var modificado = nuevoCC.modificarNombre("Gran casa");    
}catch(err){
    console.log(err);
}
console.log(modificado ? `Nombre despues: ${nuevoCC.mostrarNombre()}`:"No se ha modificado el nombre");

console.log("----------MODIFICAR NOMBRE mal CC----------");
try{
    console.log(`Nombre antes: ${nuevoCC.mostrarNombre()}`);
    var modificado = nuevoCC.modificarNombre("");    
}catch(err){
    console.log(err);
}
console.log(modificado ? `Nombre despues: ${nuevoCC.mostrarNombre()}`:"No se ha modificado el nombre");


console.log("----------MODIFICAR DIRECCION CC----------");
try{
    console.log(`Direccion antes: ${nuevoCC.mostrarDireccion()}`);
    var modificadoDireccion = nuevoCC.modificarDireccion("Calle Maria Zambrano",4,50010);

}catch (err){
    console.log(err);
}
console.log(modificadoDireccion ? `Direccion despues: ${nuevoCC.mostrarDireccion()}`:"No se ha modificado la direccion");

console.log("----------MODIFICAR DIRECCION erronea CC----------");
try {
    console.log(`Direccion antes: ${nuevoCC.mostrarDireccion()}`);
    var modificadoDireccionMal = nuevoCC.modificarDireccion("Calle Maria Zambrano",50010);

} catch (err){
    console.log(err)
}
console.log(modificadoDireccionMal ? `Direccion despues: ${nuevoCC.mostrarDireccion()}`:"No se ha modificado la direccion");
console.log("---------ASIGNACION DE TIENDAS ----------")
try {
    var agregadasTiendas = nuevoCC.asignarTiendas(4);
} catch (err){
    console.log(err);
}
console.log(agregadasTiendas.length !== 0 ? "Se han asignado" : "No se han asignado las tiendas")
// console.log("---------ASIGNACION DE TIENDAS mal ----------")
// try {
//     var agregadasTiendasMal = nuevoCC.asignarTiendas();
// } catch (err){
//     console.log(err);
// }
//     console.log(typeof(agregadasTiendasMal));

// console.log(agregadasTiendasMal.length !== 0  || typeof(agregadasTiendasMal) !== "undefined"? "Se han asignado" : "No se han asignado las tiendas")
console.log("-----------IMPRIMIR TIENDAS-------------")
console.log(nuevoCC.imprimeLocales());
