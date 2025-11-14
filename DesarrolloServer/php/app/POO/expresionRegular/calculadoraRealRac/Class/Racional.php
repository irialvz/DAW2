<?php

class Racional {
//
    private int $num;
    private int $den;

    /**
     * Racional constructor.
     * @param null $num
     * @param null $den
     * @source construimos un objeto del tipo num/den sobrecargándolo como se muestra
      *  //opciones new Racional () =>1/1
         //opciones new Racional (5) =>5/1
         //opciones new Racional (5,2) =>5/2
         //opciones new Racional ("5/2") =>5/2
         //opciones new Racional ("5") =>5/1
     */
    public function __construct(int|string $num=1, $den=1) {
        if (is_string($num) ) {

            $valores = explode("/", $num);
            $this->num = $valores[0];
            if (count($valores) ==2) {
                $this->den = $valores[1];
            }else {
                $this->den = 1;
            }
        }else {
            $this->num = $num;
            $this->den = $den;
        }
    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de sumar al racional acutal el Racional que recibo como parámetro
     */
    public function sumar(Racional $op1):Racional {
        $resultadoNumerador = ($this->num * $op1->den)+($this->den*$op1->num);
        $resultadoDenominador = $this->den*$op1->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);
    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de restar al racional acutal el Racional que recibo como parámetro
     */
    public function restar(Racional $op1):Racional {
        $resultadoNumerador = ($this->num * $op1->den)-($this->den*$op1->num);
        $resultadoDenominador = $this->den*$op1->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);
    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de multiplicar al racional acutal el Racional que recibo como parámetro
     */
    public function multiplicar(Racional $op1):Racional {
        //Escribe el código correspondiente
        $resultadoNumerador = $this->num * $op1->num;
        $resultadoDenominador = $this->den*$op1->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);
    }

    /**    /**
     * @param Racional $op1
     * @return Racional Resultado de dividir al racional acutal el Racional que recibo como parámetro
     */
    public function dividir(Racional $op1):Racional {
        $resultadoNumerador = $this->num * $op1->den;
        $resultadoDenominador = $this->den*$op1->num;
        return new Racional($resultadoNumerador, $resultadoDenominador);
    }

    public function __toString() {
        return ($this->num . "/" . $this->den);
    }


    /**
     * este método obtiene un racional simplificado del actual
     * @return Racional
     * @source simplifica el Racional actual, retornando otro objeto Racional con esos valores como num y den
     * importante: no modifica el Racional actual
     */
    public function simplificar()
    {
        $mcd = $this->mcd($this->num,$this->den);
        return new Racional ($this->num/$mcd, $this->den/$mcd);
    }

    private function mcd ($numerador,$denominador) {
        while ($denominador != 0) {
            $resto = $numerador % $denominador;
            $numerador = $denominador;
            $denominador = $resto;
        }
        return $numerador;
    }
}
