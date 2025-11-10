<?php

class Gato extends Animal
{
    public function __construct()
    {
        parent::__construct(4, "Gato");
    }

    public function hablar()
    {
        return  "miau";
    }
}