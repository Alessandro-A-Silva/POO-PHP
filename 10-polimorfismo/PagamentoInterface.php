<?php
require_once "PagamentoInterface.php";
interface PagamentoInterface
{
    public function pagar(float $valor);
}