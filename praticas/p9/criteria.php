<?php
spl_autoload_register(function ($class)
{
    if (file_exists('./app.ado/' . $class . '.class.php'))
        include_once('./app.ado/' . $class . '.class.php');
});

$criteria1 = new TCriteria;
$criteria1->add(new TFilter('sexo', '=', 'F'));
$criteria1->add(new TFilter('idade', '>', '18'), TExpression::AND_OPERATOR);

$criteria2 = new TCriteria;
$criteria2->add(new TFilter('sexo', '=', 'M'));
$criteria2->add(new TFilter('idade', '<', '16'), TExpression::AND_OPERATOR);

$criteria = new TCriteria;
$criteria->add($criteria1);
$criteria->add($criteria2, TExpression::OR_OPERATOR);
echo $criteria->dump();
