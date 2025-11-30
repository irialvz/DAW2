import { Presupuesto } from "./Presupuesto.js";
let presupuesto = new Presupuesto();
console.log(presupuesto.mostrarPresupuesto());
console.log(presupuesto.actualizarPresupuesto(10));
console.log(presupuesto.mostrarPresupuesto());
let nuevoGasto = presupuesto.CrearGasto("Cafe de especialidad",3);
console.log(presupuesto.mostrarPresupuesto());