<?php
namespace Class;
class Alumno
{
    public function __construct(private string $nombre,private string $apellido,private string $email)
    {
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->nombre." ".$this->apellido." ".$this->email."\n";
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

}