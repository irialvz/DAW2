<?php
Trait Asalariado{
    public function __construct(private float $salario){

    }
    public function getSalario(): float{
        return $this->salario;
    }
    public function setSalario(float $salario): void{
        $this->salario = $salario;
    }
    public function toString():string{
        return $this->salario;
    }
}