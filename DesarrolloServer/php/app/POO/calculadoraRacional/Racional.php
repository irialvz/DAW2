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
        if (is_string($num)) {
            $valores = explode("/", $num);
            $this->num = $valores[0];
            $this->den = $valores[1];
            if (is_null($valores[1])){
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
}
