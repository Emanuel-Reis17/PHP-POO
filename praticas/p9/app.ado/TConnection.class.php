<?php
final class TConnection
{

    private function __construct() {}

    public static function open($database)
    {
        if (file_exists('../app.config/' . $database . '.ini'))
        {
            $db = parse_ini_file('../app.config/'. $database . '.ini');
        }
        else
        {
            throw new Exception("Arquivo não encontrado!");
        }

        $user = $db['user'];
        $pass = $db['pass'];
        $host = $db['host'];
        $name = $db['name'];
        $type = $db['type'];

        if ($type === 'mysql')
        {
            $conn = new PDO("mysql:host=$host;port=3306;dbname=$name", $user, $pass);
        }
        else 
        {
            throw new Exception('Tipo de banco de dados não suportado!');
        }
        return $conn;
    }
}
