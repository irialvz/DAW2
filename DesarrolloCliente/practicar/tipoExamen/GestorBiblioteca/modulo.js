// 1. Importa todo lo que necesitas para probar
// Asume que CrearLibro (o Libro, si usas la sintaxis class) está en Libro.js
// Y que las funciones de gestión están en Biblioteca.js
import { Libro } from "./Libro.js"; // O CrearGasto, o como se llame tu clase/constructor
import {agregarLibro,buscarLibroPorTitulo,prestarLibro,mostrarCatalogo } from "./Biblioteca.js"; 

// --- COMIENZAN LAS PRUEBAS (HARDCODE) ---

// 2. Crea nuevos objetos (Instancias de la clase/constructor)
console.log("--- 1. CREACIÓN DE OBJETOS Y AGREGACIÓN ---");

const libro1 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", 1967, 5);
const libro2 = new Libro("El Quijote", "Miguel de Cervantes", 1605, 3);
// Puedes usar console.log para verificar el objeto:
console.log("Libro 1 Creado:", libro1.mostrarDetalles()); 

// 3. Llama a las funciones de gestión
agregarLibro(libro1);
agregarLibro(libro2);

console.log("\n--- 2. CATÁLOGO INICIAL ---");
// Verifica que los libros se agregaron
console.log("Catálogo después de agregar dos libros:", mostrarCatalogo());

console.log("\n--- 3. PRUEBA DE PRESTAMO Y DISPONIBILIDAD ---");
// 4. Prueba una función que manipula el estado
let resultadoPrestamo1 = prestarLibro("Cien Años de Soledad");
console.log("Resultado del Préstamo 1:", resultadoPrestamo1); 

// 5. Prueba un caso de error (prestar el mismo libro otra vez)
// let resultadoPrestamo2 = prestarLibro("Cien Años de Soledad");
// console.log("Resultado del Préstamo 2 (Error esperado):", resultadoPrestamo2); 

console.log("\n--- 4. CATÁLOGO FINAL ---");
// Muestra el catálogo de nuevo para ver el cambio de estado 'prestado'
console.log("Estado del catálogo después de los préstamos:", mostrarCatalogo());