<?php
spl_autoload_register(function ($class)
{
    if (file_exists("./app.ado/$class.class.php"))
    {
        include_once("./app.ado/$class.class.php");
    }
});

// cria instrução de SELECT
$sql = new TSqlSelect;
// define nome da entidade
$sql->setEntity('famosos');
// acrescenta colunas a consulta
$sql->addColumn('codigo');
$sql->addColumn('nome');

// cria critério de seleção de dados
$criteria = new TCriteria;
$criteria->add(new TFilter('codigo', '=', '1'));
$sql->setCriteria($criteria);

try 
{
    // abre conexão com a base my_livro (mysql)
    $conn = TConnection::open('my_livro');
    $result = $conn->query($sql->getInstruction());
    if ($result)
    {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        // exibe os dados resultantes
        echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
    }
    // fecha a conexão
    $conn = null;
}
catch (PDOException $e)
{
    // exibe mensagem de erro
    print "Error!: " . $e->getMessage(). "<br>";
    die();
}
