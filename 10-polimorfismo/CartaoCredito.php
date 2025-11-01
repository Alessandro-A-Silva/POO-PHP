<?php
require_once "PagamentoInterface.php";
class CartaoCredito implements PagamentoInterface
{
    public function pagar(float $valor)
    {
        echo "Pagamento no valor R$ ".number_format($valor,2,",",".")." realizado com o Cartão de Credito <br>";
    }
}