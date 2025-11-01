<?php

include_once "ContaBancaria.php";
include_once "Cnpj.php";

class ContaJuridica extends ContaBancaria
{
    private Cnpj $cnpj;

    public function __construct(string $titular, string $numeroConta, int $agencia, float $saldo, string $cnpj)
    {
        $this->cnpj = new Cnpj($cnpj);
        parent::__construct($titular, $numeroConta, $agencia, $saldo);
    }

    public function getCnpj(): string
    {
        return $this->cnpj->getNumero();
    }

    public function setCnpj($numero): void
    {
        $this->cnpj = new Cnpj($numero);
    }

}