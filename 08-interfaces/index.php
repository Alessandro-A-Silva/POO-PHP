<?php

require_once "./Pessoa.php";

$pessoa = new Pessoa("Fulano", 28);

echo $pessoa->apresentarPessoa();

$pessoa->exibirNomeClasse();

$pessoa->exibirPropriedadesClasses();

echo $pessoa->exibirTipoPropriedade();

?>
