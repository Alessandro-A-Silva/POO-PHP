<?php
    require_once "Carro.php";
    require_once "Moto.php";

    $carro = new Carro("Mazda","RX 7", 2004);
    echo $carro->acelerar();
    echo $carro->frear();

    $moto = new Moto("Honda","pop 100", 2010);
    echo $moto->acelerar();
    echo $moto->frear();

?>
