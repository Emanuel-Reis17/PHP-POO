<?php
include_once('./classes/Funcionario.class.php');
include_once('./classes/Estagiario.class.php');

// Criando objeto Funcionario
$pedrinho = new Funcionario;
$pedrinho->Nome = 'Pedrinho';

// Criando objeto Funcionario
$mariana = new Estagiario;
$mariana->Nome = 'Mariana';

echo $pedrinho->Nome;
echo "\n";
echo  $mariana->Nome;