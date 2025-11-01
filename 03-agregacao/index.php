<?php
require_once "funcionario.php";
require_once "departamento.php";

$funcionario1 = new Funcionario("Ciclano", "Desenvolvedor Frontend");
$funcionario2 = new Funcionario("Beltrano", "Desenvolvedor Backend");
$funcionario3 = new Funcionario("Fulano", "Desenvolvedor Fullstack");

$departamento = new Departamento("Tecnologia da Informação");
$departamento->inserirFuncionario($funcionario1);
$departamento->inserirFuncionario($funcionario2);
$departamento->inserirFuncionario($funcionario3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de funcionários e <?= $departamento->nome; ?></h1>
    <?= $departamento->listarFuncionarios(); ?>
</body>

</html>