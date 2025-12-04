let map = new Map();

map.set("name", "Ana");   // añade clave → valor
map.get("name");          // obtiene el valor de una clave
map.has("age");           // verifica si existe una clave
map.delete("age");        // elimina una clave
map.size;                 // devuelve el número de elementos

for (let [k, v] of map) { // recorre todas las entradas
    console.log(k, v);
}

map.clear();              // elimina todos los elementos
