<?php

class Motor
{
    public int $potencia;

    public function __construct(int $potencia)
    {
        $this->potencia = $potencia;
    }

    public function apresentarPotencia()
    {
        return "Este carro tem a potencia de : " . $this->potencia . " cavalos";
    }

}