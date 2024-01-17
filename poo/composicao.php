<?php
include_once('./classes/Fornecedor.class.php');
include_once('./classes/Contato.class.php');

# Instancia novo fornecedor
$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produto Bom Gosto S.A';

# Atribui informações de contato
$fornecedor->SetContato('Mauro', '51 98888-6696', 'mauro@bomgosto.com');

# Imprime informações
echo $fornecedor->RazaoSocial . "\n";
echo "Informações de contato \n";
echo $fornecedor->GetContato();
