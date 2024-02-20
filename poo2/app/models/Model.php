<?php
namespace App\Models;

use Config\Db;

class Model
{
    public static function all()
    {
        $obj = new static;
        $conn = Db::conexao();
        $sql = "SELECT * FROM $obj->table";
        $result = $conn->query($sql);
        $compras = $result->fetchAll();

        return $compras;
    }
}