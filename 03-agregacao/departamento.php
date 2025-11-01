<?php

class Departamento
{
    public string $nome;
    public array $funcionarios = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function inserirFuncionario(Funcionario $funcionario)
    {
        $this->funcionarios[] = $funcionario;
    }

    public function listarFuncionarios()
    {
        echo "Funcionarios do departamento - " . $this->nome . "<br>";
        foreach ($this->funcionarios as $funcionario) {
            echo "Nome: " . $funcionario->nome . " | Função: " . $funcionario->funcao . "<br>";
        }
    }
}