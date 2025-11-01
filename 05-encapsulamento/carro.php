<?php

class Carro
{
    private string $modelo;
    private string $marca;
    private string $ano;

    public function __construct(string $modelo, string $marca, string $ano)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function ExibirDetalhesCarro()
    {
        echo "O carro {$this->modelo} é da marca {$this->marca} do ano {$this->ano}";
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo)
    {
        if (!empty($modelo))
            $this->modelo = $modelo;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca)
    {
        if (!empty($marca))
            $this->marca = $marca;
    }

    public function getAno(): string
    {
        return $this->ano;
    }

    public function setAno(string $ano)
    {
        if (!empty($ano))
            $this->ano = $ano;
    }
}