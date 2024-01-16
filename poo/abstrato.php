<?php
include_once('./classes/Conta.class.php');
include_once('./classes/ContaPoupanca.class.php');
include_once('./classes/Pessoa.class.php');

$carlos = new Pessoa(10, 'Carlos da Silva', 1.85, 25, '10/04/1976', 'Ensino Médio', 650.00);
$conta = new ContaPoupanca(6678, 'CC.1234.56', '10/07/02', $carlos, 9876, 500.00, '10/04');