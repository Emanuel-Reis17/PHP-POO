<?php
spl_autoload_register(function ($class)
{
    include_once('./app.ado/' . $class . '.class.php');
});

setlocale(LC_NUMERIC, 'POSIX');

// cria instrução de INSERT
$sql = new TSqlInsert;
// Define o nome da entidade
$sql->setEntity('Aluno');
// Atribui o valor a cada coluna
$sql->setRowData('id', 3);
$sql->setRowData('nome', 'Pedro Cardoso');
$sql->setRowData('fone', '(88) 4444-7777');
$sql->setRowData('nascimento', '1985-04-12');
$sql->setRowData('sexo', 'M');
$sql->setRowData('serie', '4');
$sql->setRowData('mensalidade', 280.00);

// processa a instrução SQL
echo $sql->getInstruction();
