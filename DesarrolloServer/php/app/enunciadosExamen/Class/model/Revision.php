<?php

namespace enunciadosExamen\Class\enunciado;


class Revision
{
    private string $fecha;
    private float $costeBase;
    private float $peso;
    private string $diagnostico;
    private string $veterinario;

    public function __construct($fech,$peso,$diagnostico,$veterinario)
    {
        $this->fecha = $fech;
        $this->costeBase = 30;
        $this->peso= $peso;
        $this->diagnostico=$diagnostico;
        $this->veterinario=$veterinario;
    }

    public function calcularCosteFinal():float{
        return $this->costeBase * rand(10,100);
    }
    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @return float
     */
    public function getCosteBase(): float
    {
        return $this->costeBase;
    }

    /**
     * @return string
     */
    public function getDiagnostico(): string
    {
        return $this->diagnostico;
    }

    /**
     * @return float
     */
    public function getPeso(): float
    {
        return $this->peso;
    }

    /**
     * @return string
     */
    public function getVeterinario(): string
    {
        return $this->veterinario;
    }

}