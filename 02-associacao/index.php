<?php

require_once "cliente.php";
require_once "pedido.php";

$cliente = new Cliente("fulano", "fulano@email.com");

$pedido = new Pedido(1, 50.0, $cliente);

$pedido->apresentarPedido();