<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperacionReal
 *
 * @author manuel
 */
class OperacionReal extends Operacion {


    public function __construct($operacion) {
        parent::__construct($operacion);
        $separado = explode($this->getOperador(),$operacion);
        $this->op1 = floatval($separado[0]);
        $this->op2 = floatval($separado[1]);

    }

    public function opera():int {
        $resultado=0;
        switch ($this->getOperador()){
            case'+':{
                $resultado= $this->op1 + $this->op2;
                break;
            }
            case'-':{
                $resultado=$this->op1 - $this->op2;
                break;
            }
            case'/':{
                $resultado=$this->op1/ $this->op2;
                break;
            }
            case '*':{
                $resultado= $this->op1*$this->op2;
            }
        }
        return $resultado;
    }

    /**
     * @return string|void devolverá la cadena de caracteres de la expresión  que luego mostraré     *
     */
    public function __toString() {
        $resultado = parent::__toString();
        $resultado .= $this->opera();
        return $resultado;

    }

    /**
     * @return string retornará la información de toda la operación
     * En el ejemplo de ejecución lo puedes ver en forma de tabla después de ejecutarla
     */
    public function describe():string {
        $operacion = parent::describe();
        //Agrega la informacion de describe para este caso
        return $operacion;
    }


}
