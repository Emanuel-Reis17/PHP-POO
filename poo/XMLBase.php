<?php
include_once('./classes/XMLBase.class.php');

class Cachorro extends XMLBase {
    function __construct($Nome, $Idade, $Raca)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Raca = $Raca;
    }
}

$toto = new Cachorro('Totó', 10, 'Fox Terrier');
$vava = new Cachorro('Daba', 8, 'Dálmata');
echo $toto->toXml();
echo $vava->toXml();