<?php

class Cliente
{
    public string $nome;
    public string $email;

    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }
}