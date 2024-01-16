<?php
include_once('./classes/Funcionario.class.php');
include_once('./classes/Estagiario.class.php');

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);
echo 'O salário de Pedrinho é: R$' . $pedrinho->GetSalario(0) . "\n";