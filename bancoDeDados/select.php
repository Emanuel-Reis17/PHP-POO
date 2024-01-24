<?php
spl_autoload_register(function ($class)
{
    if (file_exists('./app.ado/' . $class. '.class.php'))
    {
        include_once('./app.ado/' . $class. '.class.php');
    }
});

// cria critério para a seleção
$criteria = new TCriteria;
$criteria->add(new TFilter('nome', 'LIKE', 'maria%'));
$criteria->add(new TFilter('cidade', 'LIKE', 'Porto%'));

// define intervalo de consulta
$criteria->setProperty('offset', 0);
$criteria->setProperty('limit', 10);
// define o ordenamento de consulta
$criteria->setProperty('order', 'nome');

// cria instrução SELECT
$sql = new TSqlSelect;
// define o nome da entidade
$sql->setEntity('aluno');
// acrescenta colunas a consulta
$sql->addColumn('nome');
$sql->addColumn('fone');
// define o critério de seleção de dados
$sql->setCriteria($criteria);
echo $sql->getInstruction();
