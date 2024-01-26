<?php
spl_autoload_register(function ($class)
{
    include_once('./app.ado/' . $class . '.class.php');
});

$criteria = new TCriteria;
$criteria->add(new TFilter('nome', '=', 'Iara Reis'));
$criteria->setProperty('limit', 5);
$criteria->setProperty('offset', 0);
$criteria->setProperty('order', 0);

$select = new TSqlSelect;
$select->addColumn('*');
$select->setCriteria($criteria);
// echo $select->getInstruction();

try 
{
    $conn = TConnection::open('my_livro');
    $sql = $conn->query($select->getInstruction());
    if ($sql)
    {
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        echo $row['codigo'] . '=>' . $row['nome'];
    }
}

script 

pegar nome, ano, ano atual, 
dizer idade;

pegar salario, horas trabalhadas, total de desconto, salario liquido, total