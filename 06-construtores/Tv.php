<?php
require_once "Eletronicos.php";
class Tv extends Eletronicos
{
    private string $modelo;
    private int $polegadas;

    public function __construct(string $modelo, int $polegadas, string $marca)
    {
        parent::__construct($marca);
        $this->modelo = $modelo;
        $this->polegadas = $polegadas;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setPolegadas(int $polegadas): void
    {
        $this->polegadas = $polegadas;
    }

    public function getPolegadas(): int
    {
        return $this->polegadas;
    }

    public function apresentar(): void
    {
        echo "A tv da marca $this->marca é do modelo $this->modelo e tem $this->polegadas polegadas";
    }
}