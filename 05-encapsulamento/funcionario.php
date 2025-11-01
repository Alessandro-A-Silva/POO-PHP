<?php

class Funcionario
{
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    protected function calcularBonus(): float
    {
        return $this->salario * 0.1;
    }

    public function apresentarFuncionario(): string
    {
        return "Nome: {$this->nome} | Salario {$this->salario}";
    }
}