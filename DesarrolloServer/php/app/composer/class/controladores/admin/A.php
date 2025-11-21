<?php
namespace controladores\admin;
//no tiene porque ser el namespaces igual que las carpetas del proyecto
class A
{
    public function __toString(){
        return "<h1>Estoy en la clase ".__CLASS__."</h1>";
    }

}