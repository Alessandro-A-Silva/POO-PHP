<?php

class Cnpj
{
    private string $numero;

    public function __construct(string $numero)
    {
        if (strlen($numero) != 14)
            throw new InvalidArgumentException("Quantidade de caracter de cnpj invalido...");

        if (ctype_digit($numero) == false)
            throw new InvalidArgumentException("Cnpj deve conter apenas números...");

        $this->numero = $numero;
    }

    public function getNumero(): string
    {
        return substr($this->numero, 0, 3) . "." . substr($this->numero, 3, 3) . "." . substr($this->numero, 6, 3) . "-" . substr($this->numero, 9, 2);
    }
}