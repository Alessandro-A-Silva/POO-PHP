<?php

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        if (strlen($numero) != 11)
            throw new InvalidArgumentException("Quantidade de caracteres invalida...");

        if (ctype_digit($numero) == false)
            throw new InvalidArgumentException("Cpf deve conter apenas números...");

        $this->numero = $numero;
    }

    public function getNumero()
    {
        return substr($this->numero, 0, 3) . "." . substr($this->numero, 3, 3) . "." . substr($this->numero, 6, 3) . "-" . substr($this->numero, 9, 2);
    }
}