<?php

abstract class Operacion {


    protected static int $tipo;
    protected $op1;
    protected $op2;
    protected $operador;
    const RACIONAL = 1;
    const REAL = 2;
    const ERROR = -1;

    public static function tipoOperacion($operacion) {
        self::$tipo = Operacion::ERROR;

        $numReal = '[0-9]+(\.[0-9]+)?';
        $numEntero = '[0-9]+';
        $numRacional = '[0-9]+\/[1-9][0-9]*';
        $opReal = '[\+|\-|\*|\/]';
        $opRacional = '[\+|\-|\*|\:]';

        /**REAL**/
        $real = "/^$numReal$opReal$numReal$/";
        if (preg_match($real, $operacion))
            self::$tipo= Operacion::REAL;

        /**RACIONAL**/
        $racional = "/^$numRacional$opRacional$numRacional$/";
        $racionalEntero = "/^$numRacional$opRacional$numEntero/";
        $enteroRacional = "/^$numEntero$opRacional$numRacional/";

        if (preg_match($racional, $operacion)||preg_match($racionalEntero,$operacion)||preg_match($enteroRacional,$operacion))
            self::$tipo = Operacion::RACIONAL;

        return self::$tipo;

    }

    public function __construct($operacion) {
        $this->operador = $this->obtenerOperador($operacion);
        //Asigna valores a estos atributos.
        $this->op1 ;
        $this->op2 ;
    }


    /*
     * Este método os lo paso implementado
     * */
    private function obtenerOperador($operacion):String {
        $operador="";
        if (strpos($operacion ,'+')!==false)
            $operador= '+';
        if (strpos($operacion ,'-')!==false)
            $operador= '-';
        if (strpos($operacion ,'*')!==false)
            $operador= '*';
        if (strpos($operacion ,':')!==false)
            $operador= ':';
        if (strpos($operacion ,'/')!==false && self::$tipo!==self::RACIONAL)
            $operador= '/';
        return $operador;
    }

    public function getOp1() {
        return $this->op1;
    }

    public function getOp2() {
        return $this->op2;
    }

    public function getOperador() {
        return $this->operador;
    }

    public static function getTipo():int {
        return self::$tipo;
    }

    public function __toString() {
        return "<br />$this->op1$this->operador$this->op2 = ";
    }

    public function describe():string {
        $operacion = "<table border=1><tr><th>Concepto</th> <th>Valores</th></tr>";
        $operacion .= "<tr><td>Operando 1</td><td>$this->op1</td></tr>";
        $operacion.="<tr><td>Operando 2</td><td>$this->op2</td></tr>";
        $operacion.="<tr><td>Operación</td><td>$this->operador</td></tr>";
        if (self::$tipo == Operacion::RACIONAL)
            $tipo = "Racional";
        else
            $tipo = "Real";
        $operacion.="<tr><td>Tipo de operacion</td><td>$tipo</td></tr>";
        return $operacion;
    }

    abstract public function opera();
}
