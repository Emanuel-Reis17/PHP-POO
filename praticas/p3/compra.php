<?php
include_once('./Cesta.class.php');
include_once('./Produto.class.php');

$compra1 = new Produto;
$compra2 = new Produto;
$compra3 = new Produto;
$compra4 = new Produto;

$compra1->Nome = 'Capa de celular';
$compra1->Preco = 59.90;

$compra2->Nome = 'Pen-Drive';
$compra2->Preco = 49.90;

$compra3->Nome = 'Filtro de Linho';
$compra3->Preco = 79.90;

$compra4->Nome = 'Luana Gaudêncio';
$compra4->Preco = 0.10;

$cesta = new Cesta();
$cesta->AdicionaItem($compra1);
$cesta->AdicionaItem($compra2);
$cesta->AdicionaItem($compra3);
$cesta->AdicionaItem($compra4);

echo $cesta->ExibirItens();