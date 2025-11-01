<?php
require_once "funcionario.php";
class Gerente extends Funcionario
{
    private string $cargo;

    public function __construct(string $nome, float $salario, string $cargo)
    {
        //construtor da classe pai (funcionario)
        parent::__construct($nome, $salario);
        $this->cargo = $cargo;
    }

    public function gerarBonus(): string
    {
        $bonus = $this->calcularBonus();
        return "$this->nome receberá um salário de $this->salario e um bonus de $bonus";
    }
}