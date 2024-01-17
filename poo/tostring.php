<?php
class Cachorro {
    private $Nome;

    # Método construtor
    function __construct($Nome)
    {
        $this->Nome = $Nome;
    }

    # tostring, executado sempre que o objeto for impresso
    function __toString()
    {
        return $this->Nome;
    }
}

$toto = new Cachorro('Totó');
$vava = new Cachorro('Daba');

echo $toto;
echo "\n";
echo $vava;
echo "\n";
