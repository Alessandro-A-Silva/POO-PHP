<?php
require_once "PagamentoInterface.php";
require_once "Boleto.php";
require_once "CartaoCredito.php";
require_once "Paypal.php";

$boleto = new Boleto();


$cartao = new CartaoCredito();


$paypal = new PayPal();

processarPagamento($boleto,200);
processarPagamento($cartao,800);
processarPagamento($paypal,150);



function processarPagamento(PagamentoInterface $formaPagamento, $valor){
    $formaPagamento->pagar($valor);
}