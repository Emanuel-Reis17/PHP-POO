<?php
# Inclui classe Produto
include_once('./classes/Produto.class.php');

# Cria novo produto com o preço R$345.67
$produto = new Produto(1, 'PenDrive 521MB', 1, 345.67);

# imprime produto
echo $produto->Preco;