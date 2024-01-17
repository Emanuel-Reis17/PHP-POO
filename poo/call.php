<?php
# Inclui classe Produto
include_once('./classes/Produto.class.php');

# Criando pruduto com o preço R$345.67
$produto = new Produto(1, 'PenDrive 512MB', 1, 345.67);

# Executando o método Vender, passando 10 unidades
$produto->Vender(10);
