<?php
namespace Config;

use PDO;
use PDOException;

class Db 
{
    public static function conexao()
    {
        $conexao = new \PDO('mysql:host=localhost;port=3306;dbname=phpoo', 'root', '1234');
        return $conexao;
    }
}