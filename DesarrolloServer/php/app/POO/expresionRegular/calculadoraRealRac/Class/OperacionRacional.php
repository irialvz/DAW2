<?php

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion {

    public function __construct( $operacion) {
        parent::__construct($operacion);
        $operador = preg_replace('/[0-9\/]/','',$operacion);
        $operandos = explode($operador,$operacion);
        $r1 = explode('/',$operandos[0]);
        $r2 = explode('/',$operandos[1]);
        var_dump($operandos);
        $this->op1 = new Racional(intval($r1[0]),intval($r1[1]));
        $this->op2 = new Racional(intval($r2[0]),intval($r2[1]));


    }

    /**
     * Este método realiza el cálculo de una operación Racional
     */
    public function opera():String{
        $resultadoOperacion=0;
        switch ($this->getOperador()){
            case '+':{
                $resultadoOperacion = $this->op1->sumar($this->op2);
                break;
            }
            case '-':{
                $resultadoOperacion = $this->op1->restar($this->op2);
                break;
            }
            case '*':{
                $resultadoOperacion = $this->op1->multiplicar($this->op2);
                break;
            }
            case ':':{
                $resultadoOperacion = $this->op1->dividir($this->op2);
                break;
            }
        }
        return $resultadoOperacion;
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
        return $operacion;
    }


}
