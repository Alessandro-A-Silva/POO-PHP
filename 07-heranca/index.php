<?php

include_once "ContaFisica.php";
include_once "ContaJuridica.php";

$cf = new ContaFisica("Fulano", "12345", 1, 1899.90, "12345678910");

$cf->consultarSaldo();
$cf->sacar(250.49);
$cf->depositar(37);

echo "<hr>";

$cj = new ContaJuridica("Beltrano", "54321", 2, 489745.63, "12345678901234");

$cj->consultarSaldo();
$cj->sacar(30000);
$cj->depositar(5000);