<?php
include_once('./Funcionario.class.php');
include_once('./Estagiario.class.php');

$emanuel = new Funcionario;
$emanuel->Nome = 'Emanuel Reis';
$emanuel->SetSalario(1320.00);
// echo $emanuel->GetSalario();

$melissa = new Estagiario;
$melissa->Nome = 'Melissa Reis';
$melissa->SetSalario(280.00);
echo "R\$" . $melissa->GetSalario() . "\n";

print_r(get_object_vars($melissa));
