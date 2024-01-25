<?php
spl_autoload_register(function ($class)
{
    if (file_exists('./app.ado/' . $class . '.class.php'))
    {
        include_once('./app.ado/' . $class . '.class.php');
    }
});

try
{
    // abre uma transação
    TTransaction::open('my_livro');

    // cria instrução de INSERT
    $sql = new TSqlInsert;
    $sql->setEntity('famosos');
    $sql->setRowData('codigo', 8);
    $sql->setRowData('nome', 'Galileu');

    // obtém a conexão ativa
    $conn = TTransaction::get();
    // executa instrução SQL
    $result = $conn->query($sql->getInstruction());

    // cria instrução de UPDATE
    $sql = new TSqlUpdate;
    // define o nome da entidade
    $sql->setEntity('famosos');
    // Atribui o valor de cada coluna
    $sql->setRowData('nome', 'Galileu Galilei');

    // cria critério de seleção de dados
    $criteria = new TCriteria;
    // obtém a pessoa número 8
    $criteria->add(new TFilter('codigo', '=', '8'));

    // atribui o critério de seleção de dados
    $sql->setCriteria($criteria);

    // obtém a conexão ativa
    $conn = TTransaction::get();
    // executa a instrução SQL
    $result = $conn->query($sql->getInstruction());

    // fecha a transação, aplicando todas as operações
    TTransaction::close();
}
catch(Exception $e)
{
    // exibe a mensagem de erro
    echo $e->getMessage();
    // defaz as operações realizadas durante a transação
    TTransaction::rollback();
}
