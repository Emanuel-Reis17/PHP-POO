<?php
class Cachorro {
    function __construct($coleira, $nome, $idade, $raca)
    {
        $this->coleira = $coleira;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    function __clone()
    {
        $this->coleira += 1;
        $this->nome .= ' Junior';
        $this->idade = 0;
    }
}

$toto = new Cachorro(100, 'Totó', 10, 'Fox Terrier');
$vava = clone $toto;

echo 'Código    :' . $toto->coleira . "\n";
echo 'Nome      :' . $toto->nome . "\n";
echo 'Idade     :' . $toto->idade . "\n";
echo "\n";
echo 'Código    :' . $vava->coleira . "\n";
echo 'Nome      :' . $vava->nome . "\n";
echo 'Idade     :' . $vava->idade . "\n";