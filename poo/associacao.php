<?php
include_once('./classes/Fornecedor.class.php');
include_once('./classes/Produto.class.php');

// Instaciar fornecedor
$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Poço das Caldas';

// Intancia produto
$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao = 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

// Imprime atributos
echo 'Código       : ' . $produto->Codigo . "\n";
echo 'Descrição    : ' . $produto->Descricao. "\n";
echo 'Código       : ' . $produto->Fornecedor->Codigo . "\n";
echo 'Razão Social : ' . $produto->Fornecedor->RazaoSocial . "\n";
