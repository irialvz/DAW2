let s = "Hello World";

s.length;                 // devuelve la longitud de la cadena
s.charAt(1);              // devuelve el carácter en la posición dada
s.charCodeAt(0);          // devuelve el código Unicode del carácter
s.slice(0, 5);            // extrae parte de la cadena (inicio, fin)
s.substring(0, 5);        // extrae parte de la cadena (sin negativos)
s.substr(0, 5);           // extrae caracteres desde posición (deprecado)

s.toUpperCase();          // convierte la cadena a mayúsculas
s.toLowerCase();          // convierte la cadena a minúsculas

s.includes("World");      // verifica si contiene un texto
s.startsWith("He");       // comprueba si empieza con un texto
s.endsWith("ld");         // comprueba si termina con un texto

s.indexOf("o");           // devuelve la primera posición de un texto
s.lastIndexOf("o");       // devuelve la última posición de un texto

s.replace("World", "JS"); // reemplaza la primera coincidencia
s.replaceAll("o", "0");   // reemplaza todas las coincidencias

s.split(" ");             // divide en un array usando un separador
"   hi   ".trim();        // elimina espacios al inicio y final
"hi".repeat(3);           // repite la cadena N veces
