<?php
require_once "motor.php";
class Carro
{
    public string $modelo;
    private Motor $motor;

    public function __construct(string $modelo, int $potenciaMotor)
    {
        $this->modelo = $modelo;
        //a classe motor so existe quando carro for instanciado
        $this->motor = new Motor($potenciaMotor);
    }

    public function exibirDetalhesCarro()
    {
        echo "Carro modelo: {$this->modelo} <br>";
        echo "{$this->motor->apresentarPotencia()}";
    }
}