<?php

require_once "./Veiculo.php";

class Carro extends Veiculo
{   
    public function __construct($marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
    }

    public function acelerar()
    {
        return "O carro da marca $this->marca do modelo $this->modelo está celerando a 200 km/h <br>";
    }

    public function frear()
    {
        return "O carro da marca $this->marca do modelo $this->modelo freiou e está parado <br>";
    }
}