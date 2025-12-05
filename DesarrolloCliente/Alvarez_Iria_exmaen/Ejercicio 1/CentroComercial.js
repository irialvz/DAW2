export class CentroComercial {
    nombreCentroComercial;
    direccion;
    plantas;
    constructor (nombre,calle,numero,codigoPostal){
        if ( isNaN(numero) || isNaN(codigoPostal)){
            throw new Error("Formato de entrada invalido. Los numeros deben ser de tipo numerico.");
        }else if (nombre.trim().length === 0 || calle.trim().length === 0 || typeof nombre !== "string" || typeof calle !== "string"){
            throw new Error("Formato de entrada incorrecto. El texto debe ser de tipo texto");
        }
        this.nombreCentroComercial = nombre.trim();
        this.direccion= { calle:calle.trim(), numero: numero, cp: codigoPostal};
        this.plantas = [];
        this.arrayTiendas = [];
    }
    mostrarDireccion = () =>{return `Calle: ${this.direccion["calle"]}, Nº: ${this.direccion["numero"]}, CP: ${this.direccion["cp"]}`;}
    mostrarNombre= () =>{return `Nombre CC: ${this.nombreCentroComercial}`;}
    mostrarInfoCompleta = () => {return `${this.mostrarNombre()}, ${this.mostrarDireccion()}`};
    mostrarNumeroPlantas = () => {return this.plantas.length }
    agregarPlantasYLocales(numPlantas,numLocales){
        if (numPlantas <= 0 || numLocales <= 0){
            throw new Error("Debes introducir un numero mayor a 0 en las plantas y locales");
        }
        for (let i=0;i<numPlantas;i++){
            let plantaLocal = {planta: i,numeroLocales: numLocales};
            this.plantas.push(plantaLocal);
        }
        return this.plantas.length > 0;
    }
    modificarNombre(nombre){
        if (nombre.trim().length === 0){
            throw new Error("El nombre introducido esta vacio");
        }
        this.nombreCentroComercial = nombre.trim();
        return this.nombreCentroComercial === nombre.trim();
    }
    modificarDireccion(...nuevaDireccion){
        if (nuevaDireccion.length != 3){
            throw new Error("Debes introducir calle,numero,cp");
        }
        for (const elemento of nuevaDireccion){
            if (elemento[0].trim().length === 0 || elemento[1].trim().length === 0 || elemento[2].trim().length === 0){
                throw new Error("Parametros invalidos");
            }
            this.direccion["calle"] = nuevaDireccion[0];
            this.direccion["numero"] = Number(nuevaDireccion[1]);
            this.direccion["cp"] = Number(nuevaDireccion[2]);
            return true;
        }
    }
    asignarTiendas(...tiendas){
        if (this.mostrarNumeroPlantas <= 0){
            throw new Error("No hay plantas en el CC");
        }
        if (arguments[0] === undefined){
            throw new Error("Debes introducir un numero de tiendas");
        }
        if (typeof(arguments[0]) !== "number"){
            throw new Error("El numero de tiendas debe ser numerico");
        }
        const nombresTiendas = ["Zara","Pull&Bear","Stradivarius","Bershka","Massimo Dutty","Mango","Lefties"];
        for (const planta of this.plantas){
            for (let i=0;i<arguments[0];i++){
                let indiceRandom = Math.round(Math.random()*nombresTiendas.length);
                let tienda = {nombre: nombresTiendas[indiceRandom],planta: planta["planta"],local: i};
                this.arrayTiendas.push(tienda);              
            }
        }
        return this.arrayTiendas ;
    }
    imprimeLocales = () => {
        let salida = "";
        this.arrayTiendas.forEach(tienda => {
            salida += `Tienda del local ${tienda.local} de la planta ${tienda["planta"]}: ${tienda["nombre"]}\n`
    })
return salida};


}