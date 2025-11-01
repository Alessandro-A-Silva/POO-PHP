<?php

require_once "Pessoa.php";

$p = new Pessoa("sandro", 26);
//printa o objeto
var_dump($p);

$p->nome = "alessandro";
$p->idade = 27;

echo "<br></br>";
//printa o objeto
var_dump($p);