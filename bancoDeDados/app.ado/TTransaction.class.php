<?php
/**
 * classe TTransaction
 * esta classe provê os métodos necessários para manipular transações
 */
final class TTransaction
{
    private static $conn;  // conexão ativa

    /**
     * método construtor()
     * Está decarado como private para impedir que se crie instâncias de TTransaction
     */
    private function __construct() {}

    /**
     * método opem()
     * Abre uma transação e uma conexão BD
     * @param $database = nome do banco de dados
     */
    public static function open($database)
    {
        // abre a conexão e armazena na propriedade estática $conn
        if (empty(self::$conn))
        {
            self::$conn = TConnection::open($database);
            // Inicia a transação
            self::$conn->beginTransaction();
        }
    }

    /**
     * método get()
     * retorna a conexão ativa da transação
     */
    public static function get()
    {
        // retorna a conexão ativa
        return self::$conn;
    }

    /**
     * método rollback()
     * desfaz todas as operações realizadas durante a transação
     */
    public static function rollback()
    {
        if (self::$conn)
        {
            // defaz as operações realizadas durante a transação
            self::$conn->rollback();
            self::$conn = NULL;
        }
    }

    /**
     * método close()
     * Aplica todas as operações realizadas e fecha a transação
     */
    public static function close()
    {
        if (self::$conn)
        {
            // aplica as operações realizadas
            // durante a transação
            self::$conn->commit();
            self::$conn = NULL;
        }
    }
}