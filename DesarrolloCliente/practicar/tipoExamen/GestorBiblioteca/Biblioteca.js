import { Libro } from "./Libro.js"; // O CrearGasto, o como se llame tu clase/constructor
let catalogoLibros = [];
function agregarLibro(libro) {
    if (!(libro instanceof Libro)) {
        throw new Error("Error: formato de clase Libro incorrecto")
    }
    catalogoLibros.push(libro);
    return `La longitud actual del array es de ${catalogoLibros.length}`;
}
function buscarLibroPorTitulo(titulo) {
    if (typeof (titulo) !== "string") {
        throw new Error("El titulo debe ser una cadena de texto");
    }
    if (catalogoLibros.length == 0) {
        throw new Error("Actualmente no hay libros en el catalogo");
    }
    const encontrado = catalogoLibros.find(libro => {
        return libro.titulo.toLowerCase() === titulo.toLowerCase();
    })
    return encontrado || null;
}
function prestarLibro(titulo) {
    if (buscarLibroPorTitulo(titulo) == null) {
        throw new Error("Error: titulo no encontrado");
    }
    let libroEncontrado = buscarLibroPorTitulo(titulo);

    // 3. Si no se encuentra, lanza el error
    if (libroEncontrado === null) {
        throw new Error("Error: Título no encontrado");
    }

    // 4. Llama al método y captura su resultado
    // El método cambiarDisponibilidad ahora devuelve true o un mensaje de error
    const resultado = libroEncontrado.cambiarDisponibilidad(true);

    if (resultado === true) {
        return `Préstamo exitoso de: ${libroEncontrado.titulo}`;
    } else {
        // Esto devolverá el mensaje de error si el libro ya estaba prestado
        return resultado;
    }

}
function mostrarCatalogo() {
    let arrayCatalogo = new Array();
    catalogoLibros.forEach(libro => {
        arrayCatalogo.push(libro.mostrarDetalles());
    });
    return arrayCatalogo;
}
export { agregarLibro, buscarLibroPorTitulo, prestarLibro, mostrarCatalogo };