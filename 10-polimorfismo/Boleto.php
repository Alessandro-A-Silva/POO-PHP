<?php
require_once "PagamentoInterface.php";
class Boleto implements PagamentoInterface
{
    public function pagar(float $valor)
    {
        echo "Pagamento no valor R$ ".number_format($valor,2,",",".")." gerado via Boleto <br>";
    }
}