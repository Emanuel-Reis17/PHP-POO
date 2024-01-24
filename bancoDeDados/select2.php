<?php
spl_autoload_register(function ($class)
{
    if (file_exists('./app.ado/' . $class . '.class.php'))
    {
        include_once('./app.ado/' . $class . '.class.php');
    }
});

// cria critério de seleção
$criteria1 = new TCriteria;
$criteria1->add(new TFilter('sexo', '=', 'F'));
$criteria1->add(new TFilter('serie', '=', '3'));

$criteria2 = new TCriteria();
$criteria2->add(new TFilter('sexo', '=', 'M'));
$criteria2->add(new TFilter('serie', '=', '4'));

$criteria = new TCriteria;
$criteria->add($criteria1, TExpression::OR_OPERADOR);
$criteria->add($criteria2, TExpression::OR_OPERADOR);

// define o ordenamento
$criteria->setProperty('order', 'nome');

// cria instrução SELECT
$sql = new TSqlSelect;
$sql->setEntity('aluno');
$sql->addColumn('*');
$sql->setCriteria($criteria);

// processa a instrução SQL
echo $sql->getInstruction();
