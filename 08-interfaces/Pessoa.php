<?php
require_once "./InterfaceBase.php";
class Pessoa implements InterfaceBase
{
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibirNomeClasse(): string
    {
        return "Olá, eu sou a classe" . __CLASS__ . "<br>";
    }

    public function exibirPropriedadesClasses(): void
    {
        $propriedades = get_object_vars($this);

        //$key é o nome da propriedade e $value é o que está dentro
        foreach($propriedades as $key => $value)
        {
            echo "Essa é a propriedade: {$this->$key}<br>";
        }
    }

    public function exibirTipoPropriedade(): void
    {
        $propriedades = get_object_vars($this);

        foreach($propriedades as $key => $value)
        {
            echo "A propriedade $key é do tipo ".getType($value)."<br>";
        }
    }

    public function apresentarPessoa()
    {
        return "Olá, me chamo {$this->nome} e tenho {$this->idade} anos de idade";
    }
}