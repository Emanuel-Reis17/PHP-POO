<?php
// NÃO EXECUTAR O CÓDIGO
try 
{
    // Instancia um PDO, conectando MySQL
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
    // $result = $conn->query("SELECT * FROM famosos");
    // if ($result)
    // {
    //     foreach($result as $row)
    //     {
    //         echo $row['codigo'] . '-' .
    //         $row['nome'] . "<br>\n";
    //     }
    // }
    // $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')");
    // $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
    // $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Ayrton Senna')");
    // $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Charlie Chaplin')");
    // $conn->exec("UPDATE famosos SET nome = 'Melissa Reis' WHERE codigo = 1");
    // $conn->exec("DELETE FROM famosos WHERE codigo = 4");
    
    // Fecha a conexão
    $conn = null;
}
catch(PDOException $e)
{
    // Caso ocorra erros uma exceção exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
}