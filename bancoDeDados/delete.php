<?php
spl_autoload_register(function ($class) 
{
    if (file_exists('./app.ado/' . $class . '.class.php'))
    {
        include_once('./app.ado/' . $class . '.class.php');
    }
});

// método de seleção de dados
$criteria = new TCriteria;
$criteria->add(new TFilter('id', '=', '3'));

// cria a instrução DELETE
$sql = new TSqlDelete;
$sql->setEntity('aluno');
$sql->setCriteria($criteria);
echo $sql->getInstruction();
