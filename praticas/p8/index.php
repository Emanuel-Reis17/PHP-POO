<?php
try
{
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
    $result = $conn->query("SELECT * FROM famosos");

    if ($result)
    {
        foreach ($result as $row)
        {
            echo '<h1>' . $row['codigo'] . '=>' . $row['nome']. "</h1><br>\n";
        }
    }

    // Fecha a aplicação
    $conn = null;
}
catch (PDOException $e)
{
    print 'ERROR: ' . $e->getMessage() . "<br>\n";
    die('Finalizando a aplicação');
}