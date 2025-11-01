<?php

class Produto
{
    private string $descricao;
    private float $preco;

    //construtor
    public function __construct(string $descricao, float $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function apresentarProduto(): void
    {
        echo "O produto {$this->descricao} custa R$: {$this->preco}";
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }
    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }
}