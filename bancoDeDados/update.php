<?php
spl_autoload_register(function ($class)
{
    if (file_exists('./app.ado/'. $class . '.class.php'))
    {
        include_once('./app.ado/'. $class . '.class.php');
    }
});

// cria um critério de seleção de dados
$criteria = new TCriteria;
$criteria->add(new TFilter('id', '=', '3'));

// cria instrução UPDATE
$sql = new TSqlUpdate;
$sql->setEntity('aluno');
$sql->setRowData('nome', 'Pedro Cardoso da Silva');
$sql->setRowData('rua', 'Machado de Assis');
$sql->setRowData('fone', '(88) 5555');

// define o critério de seleção de dados
$sql->setCriteria($criteria);

// processo a instrução SQL
echo $sql->getInstruction();
