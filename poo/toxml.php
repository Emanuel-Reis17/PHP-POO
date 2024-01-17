<?php
class Cachorro {
    function __construct($Nome, $Idade, $Raca)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Raca = $Raca;
    }

    # toXml, retorna o objeto no formato XML
    function toXml() 
    {
        return 
        <<<XML
            <cachorro>
                <nome> {$this->Nome} </nome>
                <idade> {$this->Idade} </idade>
                <raca> {$this->Raca} </raca>
            </cachorro>
        XML;
    }
}

$toto = new Cachorro('Totó', 10, 'Fox Terrier');
$vava = new Cachorro('Daba', 8, 'Dálmata');
echo $toto->toXml();
echo "\n";
echo $vava->toXml();
