import { Gasto } from "./Gasto.js";
var presupuesto = 0;

export class Presupuesto {
    constructor() {
        this.listaGastos = new Array;
    }

    mostrarPresupuesto() {
        return `Tu presupuesto actual es de ${presupuesto}`;
    }
    actualizarPresupuesto(cantidad) {
        return presupuesto = cantidad >= 0 ? cantidad : -1;
    }
    CrearGasto(descripcion, valor) {
        if (valor < presupuesto) {
            var gasto = new Gasto(descripcion, valor);
            this.listaGastos.push(gasto);
            this.actualizarPresupuesto(presupuesto - valor);
        }else {
            throw new Error("Te falta presupuesto");
        }
        return gasto;
    }



}
