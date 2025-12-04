let set = new Set();

set.add(1);               // añade un valor (sin duplicados)
set.add(2);               // los duplicados se ignoran
set.has(1);               // verifica si contiene un valor
set.delete(2);            // elimina un elemento
set.size;                 // devuelve cuántos elementos tiene

for (let v of set) {      // recorre el conjunto
    console.log(v);
}

set.clear();              // elimina todos los valores
