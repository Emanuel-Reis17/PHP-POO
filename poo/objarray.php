<?php
// Cria array $dados_william
$dados_william['nome'] = 'William';
$dados_william['idade'] = 22;
$dados_william['profissao'] = 'Controle de Estoque';

// Cria array $dados__daline
$dados_daline['nome'] = 'Daline';
$dados_daline['idade'] = 21;
$dados_daline['profissao'] = 'Almoxarifado';

$william = new stdClass();
$daline = new stdClass();

foreach($dados_william as $chave => $valor) {
    $william->$chave = $valor;
}

foreach($dados_daline as $chave => $valor) {
    $daline->$chave = $valor;
}

echo "{$william->nome} é {$william->profissao} \n";
echo "{$daline->nome} é {$daline->profissao} \n";