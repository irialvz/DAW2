<?php

namespace enunciadosExamen\Class\enunciado;
use enunciadosExamen\Class\enunciado\Revision;
class Mascota
{
    public function __construct(private string $nombre,private string $especie,private int $edad,private string $estado,private Revision|null $primeraRevision = null)
    {
        //todo variable Revision
    }

    /**
     * @param \enunciadosExamen\Class\enunciado\Revision|null $primeraRevision
     */
    public function setPrimeraRevision(Revision $primeraRevision): void
    {
        $this->primeraRevision = $primeraRevision;
    }
    public function __getNombre()
    {
        return  $this->nombre;
    }
    public function __getEspecie()
    {
        return  $this->especie;
    }
    public function __getEdad()
    {
        return  $this->edad;
    }
    public function __getEstado():string
    {
        $mensaje = match ($this->estado){
            "sana" => "La mascota esta sana",
            "tratamiento" => "La mascota sigue un plan de tratamiento",
            "urgente" => "La mascota requiere atención inmediata",
        };
        return $mensaje;
    }
    public function mostrarDatos():string{
        return "Mascota $this->nombre de especie $this->especie y edad $this->edad. \tDatos de la ultima revision: $this->primeraRevision";

    }

    /**
     * @param string $estadoNuevo
     */
    public function cambiarEstado(string $estadoNuevo): void
    {
        $this->especie = ($this->comprobarEstado($estadoNuevo )? $estadoNuevo : $this->estado);
    }
    private function comprobarEstado(string $estado):Bool{
        $correcto = match ($estado){
            "sana" => true,
            "tratamiento" => true,
            "urgente" => true,
            default => false,
        };
        return $correcto;
    }




}