<?php
require_once "PagamentoInterface.php";
class Paypal implements PagamentoInterface
{
    public function pagar(float $valor)
    {
        echo "Pagamento no valor R$ ".number_format($valor,2,",",".")." realizado via Paypal <br>";
    }
}