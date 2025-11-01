<?php

class Funcionario
{
    public string $nome;
    public string $funcao;

    public function __construct(string $nome, string $funcao)
    {
        $this->nome = $nome;
        $this->funcao = $funcao;
    }

}