<?php
class Persona{
//    private $nombre;
//    private $fechaNacimiento;
//    private $direccion;
    public static $numeroPersonas=0;
    function __construct(protected string $nombre,protected string $fechaNacimiento,protected string $direccion){
    self::$numeroPersonas++;
    }
    function __toString(){
        return "nombre ".$this->getNombre().",nacida el ".$this->getFechaNacimiento().",reside en ".$this->getDireccion();
    }
    function getNombre(): string{
        return $this->nombre;
    }
    function getFechaNacimiento(): string{
        return $this->fechaNacimiento;
    }
    function getDireccion(): string{
        return $this->direccion;
    }
    function __destruct(){
        self::$numeroPersonas--;
    }
    function getNumeroPersonas(): int {
        return self::$numeroPersonas;
    }
//    function calcularEdad():int{
//        $date = new DateTime();
//        if($this->fechaNacimiento )
//
//    }
}
?>