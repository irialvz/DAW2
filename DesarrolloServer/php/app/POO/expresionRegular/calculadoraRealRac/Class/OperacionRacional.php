<?php

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion {
    private Racional $racional1;
    private Racional $racional2;
    public function __construct( $operacion) {
        parent::__construct($operacion);
        $primerOperando = explode("/", $this->getOp1());
        $segundoOperando = explode("/", $this->getOp2());
        $this->racional1 = new Racional($primerOperando[0],$primerOperando[1]);
        $this->racional2 = new Racional($segundoOperando[0],$segundoOperando[1]);


    }

    /**
     * Este método realiza el cálculo de una operación Racional
     */
    public function opera() {
        $resultadoOperacion=0;
        switch ($this->getOperador()){
            case '+':{
                $resultadoOperacion = $this->racional1->sumar($this->racional2);
                break;
            }
            case '-':{
                $resultadoOperacion = $this->racional1->restar($this->racional2);
                break;
            }
            case '*':{
                $resultadoOperacion = $this->racional1->multiplicar($this->racional2);
                break;
            }
            case ':':{
                $resultadoOperacion = $this->racional1->dividir($this->racional2);
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
        $resultado.= $this->opera();
        return $resultado;

    }

    /**
     * @return string retornará la información de toda la operación
     * En el ejemplo de ejecución lo puedes ver en forma de tabla después de ejecutarla
     */
    public function describe() {
        $operacion = parent::describe();
        //Agrega la informacion de describe para este caso
        return $operacion;
    }


}
