<?php
include_once "Cpf.php";
include_once "ContaBancaria.php";
class ContaFisica extends ContaBancaria
{
    private Cpf $cpf;

    public function __construct(string $titular, string $numeroConta, int $agencia, float $saldo, string $cpf)
    {
        $this->cpf = new Cpf($cpf);
        parent::__construct($titular, $numeroConta, $agencia, $saldo);
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    public function setCpf($numero): void
    {
        $this->cpf = new Cpf($numero);
    }
}