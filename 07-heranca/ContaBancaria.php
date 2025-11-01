<?php

class ContaBancaria
{
    protected string $titular;
    protected string $numeroConta;
    protected int $agencia;
    protected float $saldo;

    public function __construct(string $titular, string $numeroConta, int $agencia, float $saldo)
    {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    public function sacar(float $valor): void
    {
        if ($valor <= 0)
            throw new InvalidArgumentException("Valor de saque invalido...");

        if ($valor > $this->saldo)
            throw new InvalidArgumentException("Não é possivel sacar quantia superior ao saldo...");

        $this->saldo -= $valor;

        echo "Saque de R$ $valor realizado com sucesso! <br> Novo saldo é de R$ $this->saldo <br>";
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0)
            throw new InvalidArgumentException("Valor de deposito insuficiente...");

        $this->saldo += $valor;

        echo "Deposito de $valor realizado com sucesso! <br> Novo saldo é de R$ $this->saldo <br>";
    }

    public function consultarSaldo(): void
    {
        echo "Saldo atual é de R$ $this->saldo <br>";
    }

    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setNumeroConta(string $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function setAgencia(int $agencia): void
    {
        $this->agencia = $agencia;
    }

    public function getAgencia(): int
    {
        return $this->agencia;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}