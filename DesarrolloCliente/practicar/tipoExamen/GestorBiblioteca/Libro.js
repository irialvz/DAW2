export  class Libro {
    titulo;
    autor;
    anioPublicacion;
    numCopias;
    prestado;
    constructor(titulo, autor, anioPublicacion, numCopias) {
        if (this.validarObligatorio(titulo) || this.validarObligatorio(autor)) {
            throw new Error("Titulo y autor son obligatorios");
        } else if (this.validarFecha(anioPublicacion)) {
            throw new Error("El numero de publicación debe ser entero");
        } else if (anioPublicacion < 1500) {
            this.anioPublicacion = 1500;
        } else if (this.validarCopias(numCopias)) {
            this.numCopias = 0;
        }
        this.titulo = titulo;
        this.autor = autor;
        this.anioPublicacion = anioPublicacion;
        this.numCopias = numCopias;
        this.prestado = false;
    }
    validarObligatorio = (parametro) => { return parametro.length > 0 ? false : true; };
    validarFecha = (anio) => { return anio <= 0 }
    validarCopias = (copias) => { return copias < 0 }
    mostrarDetalles() {
        return `${this.titulo} de ${this.autor} (Publicado en ${this.anioPublicacion})\n Copias disponibles: ${this.numCopias} \n Estado: ${this.prestado ? "Prestado" : "Disponible"}\n`
    }
    cambiarDisponibilidad = (nuevoEstado) => {
        //si esta prestado y se introduce true == false
        // si esta prestado y se introduce false == true
        //si esta disponible y se introduce true == true
        // si esta disponible y se introduce false == false
        if (this.prestado && nuevoEstado){
            throw new Error("Error: El libro ya estaba prestado")  ;
        }else if (!this.prestado && !nuevoEstado){
            throw new Error("Error: No se puede devolver un libro que está disponible")  ;
        }
        this.prestado = nuevoEstado
        return this.prestado == nuevoEstado;
    }
}
