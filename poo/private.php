<?php
include_once('./classes/Funcionario.class.php');

$pedro = new Funcionario;
$pedro->SetSalario(876);
echo 'Salário: R$' . $pedro->GetSalario();