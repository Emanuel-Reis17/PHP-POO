<?php
spl_autoload_register(function ($class) {
    include_once('./' . $class . '.class.php');
});

$fornecedor = new Fornecedor(0001, 'Violet Solutions', 'White Street nº7', 'Auckland City', '47.331.668/0001-85');
$fornecedor->SetContato('Emanuel Reis', 'emanuel@violet.com', '(71) 98484-6969');
$fornecedor->GetContato();
$fornecedor->Trabalhar('Contrato', 'Reunião', 'Expediente');
echo $fornecedor;