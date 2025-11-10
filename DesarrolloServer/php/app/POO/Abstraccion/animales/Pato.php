<?php

class Pato extends Animal
{
    public function __construct()
    {
        parent::__construct(2, "Pato");
    }

    public function hablar()
    {
        return  "cuack";
    }
}