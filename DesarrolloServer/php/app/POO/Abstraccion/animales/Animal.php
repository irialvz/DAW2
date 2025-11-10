<?php

abstract class Animal
{
    public function __construct(private int $patas,private string $especie)
    {

    }
    public function toString():string{
        return "Soy ".$this->especie." y tengo ".$this->patas;
    }
    abstract public function hablar();



}