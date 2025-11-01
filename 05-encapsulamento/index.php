<?php

// require_once "carro.php";

// $carro = new Carro("RX-7", "Mazda", "2004");

// echo "{$carro->getModelo()} <br>";
// echo "{$carro->getMarca()} <br>";
// echo "{$carro->getAno()} <br>";

// echo "<hr>{$carro->exibirDetalhesCarro()}<br>";

// $carro->setAno("");

// echo "<hr>{$carro->exibirDetalhesCarro()}<br>";

// $carro->setAno("2002");

// echo "<hr>{$carro->exibirDetalhesCarro()}<br>";

require_once "gerente.php";
require_once "operario.php";
// require_once "funcionario.php";

$gerente = new Gerente("Fulano", 5000.00, "Gerente de projetos");

echo $gerente->apresentarFuncionario();

echo "<br><hr><br>";

echo $gerente->gerarBonus();

$operario = new Operario("Beltrano", 3000.00, "Auxiliar geral");

echo "<br><hr><br>";

echo $operario->apresentarFuncionario();

echo "<br><hr><br>";

echo $operario->gerarBonus();