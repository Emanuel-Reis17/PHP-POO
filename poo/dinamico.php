<?php
// Cria objeto william
$william = new stdClass();
$william->nome = 'William';
$william->idade = 22;
$william->profissao = 'Controle de Estoque';

// Cria objeto daline
$daline = new stdClass();
$daline->nome = 'Daline';
$daline->idade = 21;
$daline->profissao = 'Almoxarifado';

print_r($william);
echo "\n";
print_r($daline);