export class Gasto {

    constructor(descripcion, valor) {
        if (descripcion.length !== 0) {
            this.descripcion = descripcion;
        } else {
            throw new Error("La descripcion es obligatoria");
        }
        this.valor = valor > 0 ? valor : 0;

    }

    mostrarGasto() {
        return `Gasto correspondiente a ${this.descripcion} con valor ${this.valor} €`;
    }
    actualizarDescripcion(descripcionNueva) {
        return this.descripcion = descripcionNueva;
    }
    actualizarValor(valorNuevo) {
        if (valorNuevo >= 0) {
            this.valor = valorNuevo;
        } else {
            throw new Error("Invalido, Valor del gasto menor a 0");
        }
    }
}
