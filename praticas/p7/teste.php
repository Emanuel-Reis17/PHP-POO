<?php
// Include de todos as classes
spl_autoload_register(function($class) 
{
    include_once('./classes/' . $class. '.class.php');
});

// Pessoas
// Emanuel Reis
$emanuel = new Pessoa('Emanuel Reis', 19, 'Ensino Médio Completo', '000.000.000-00');
$emanuel->setContato('+55 71 98745-8963', 'emanuel@gmail.com', 'Tall Woods n°17, Auckland City, New Zealand');
// Melissa Reis
$melissa = new Pessoa('Melissa Reis', 19, 'Ensino Superior Completo', '240.897.220-55');
$melissa->setContato('+55 71 98888-6969', 'melissa@gmail.com', 'White Sky Street n°7, Auckland City, New Zealand');
// Iara Reis
$iara = new Pessoa('Iara Reis', 16, 'Ensino Médio', '179.202.100-38');
$iara->setContato('+55 71 9444-555', 'iarareis@gmail.com', 'Purple House Avenue n°5');

// Empresa
$violet = new Empresa('Violet Technology', 'Desenvolvimento de Softwares', '71.676.421/0001-85', $emanuel);
$violet->setContato('+55 71 96969-6969', 'violettech@gmail.com', 'Billions Gate n°17, Auckland City, New Zealand');

// Funcionario
$funcionaria1 = new Funcionario($melissa, 'Programadora', 2500.90, $violet);
$estagiaria1 = new Estagiario($iara, 'Designer', 1320.90, $violet);
