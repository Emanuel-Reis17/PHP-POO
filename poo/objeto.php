<?php
// Carregar a classe
include_once('./classes/Produto.class.php');

// Atribuindo
$produto1 = new Produto;
$produto2 = new Produto;

// Inserindo dados
$produto1->Codigo = 4001;
$produto1->Descricao = 'Smartphone - Samsung Galaxy M14 5G';

$produto1->Codigo = 4002;
$produto2->Descricao = 'Smartphone - Iphone 15 PRO MAX';

// Imprime informação da etiqueta
$produto1->ImprimeEtiqueta();
echo "\n";
$produto2->ImprimeEtiqueta();
