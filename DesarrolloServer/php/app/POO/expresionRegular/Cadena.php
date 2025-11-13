<?php

class Cadena
{
    public function __construct(private string $cadena){}
    public function validarExpresionRegular($expresionRegular){
        return (preg_match("#$expresionRegular#",$this->getCadena()));
    }
    public function getCadena(){
        return $this->cadena;
    }
    public function __toString(): string
    {
        return $this->getCadena();
    }

}
?>