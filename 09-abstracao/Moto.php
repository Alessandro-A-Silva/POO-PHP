<?php

require_once "./Veiculo.php";

class Moto extends Veiculo
{   
    public function __construct($marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
    }

    public function acelerar()
    {
        return "A moto da marca $this->marca do modelo $this->modelo está celerando a 140 km/h <br>";
    }

    public function frear()
    {
        return "A moto da marca $this->marca do modelo $this->modelo freiou e está parada <br>";
    }
}