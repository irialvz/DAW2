<?php

class Racional{
    //atributos,obligatorio asignar la visibilidad (public || private)
    private int $num;
    private int $den;
    //metodos
    //constructir
    public function __construct(int|string $num = 1, int|null $den = 1){
    //    public function __construct(private int $numIntroducido, private int $denIntroducido){ PROPRAGACION ATRIBUTOS

        //FORMA 1 DE EXTRAER NUMERO DEL STRING
//        if (gettype($num) == "string"){
//            $numerador = substr($num, 0,strpos($num, "/") );
//            $this->num = intval($numerador);
//
//            $denominador = substr($num, strpos($num, "/")+1);
//            $this->den = intval($denominador);
//        }else {
//            $this->num = $num;
//            $this->den = $den;
//        }
        // FORMA 2 DE EXTRAER NUMERO DEL STRING
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
    public function __toString(){
        return "$this->num/$this->den";
    }
    function sumarGeneralizado(Racional $num1):Racional{
        $resultadoNumerador = ($this->num * $num1->den)+($this->den*$num1->num);
        $resultadoDenominador = $this->den*$num1->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);

    }
    function restar(Racional $num1):Racional{
        $resultadoNumerador = ($this->num * $num1->den)-($this->den*$num1->num);
        $resultadoDenominador = $this->den*$num1->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);
    }
    function multiplicar(Racional $num1):Racional{
        $numerador=$this->num * $num1->num;
        $denominador=$this->den * $num1->den;
        return new Racional($numerador, $denominador);
    }
    function dividir(Racional $num1):Racional{
        $numerador = $this->num * $num1->den;
        $denominador = $this->den * $num1->num;
        return new Racional($numerador, $denominador);
    }
    function simplificar():void{
        $resultado = $this->mcd_tradicional($this->num,$this->den);
        $this->num = ($this->num /$resultado );
        $this->den = ($this->den /$resultado );
    }
    private function mcd_tradicional($a,$b){
        while($b != 0){
            $resto = $a % $b;
            $a = $b;
            $b = $resto;
        }
        return $a;

    }

    public static function sumar_estatico(Racional $num1,Racional $num2):Racional{
        $resultadoNumerador = ($num1->num * $num2->den)+($num1->den*$num2->num);
        $resultadoDenominador = $num1->den*$num2->den;
        return new Racional($resultadoNumerador, $resultadoDenominador);

    }

}
