<?php

require_once "cliente.php";
class Pedido
{
    public int $numeroPedido;
    public float $valor;
    public Cliente $cliente;

    public function __construct(int $numeroPedido, float $valor, Cliente $cliente)
    {
        $this->numeroPedido = $numeroPedido;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    public function apresentarPedido()
    {
        echo "numero pedido: {$this->numeroPedido} <br>";
        echo "valor pedido: {$this->valor} <br>";
        echo "nome cliente: {$this->cliente->nome} <br>";
        echo "email cliente: {$this->cliente->email} <br>";
    }
}