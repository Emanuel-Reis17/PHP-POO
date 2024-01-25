<?php
/**
 * Classe TSqlInsert
 * Esta classe provê meios de para a manipulação de uma instrução de INSERT no banco de dados
 */
final class TSqlInsert extends TSqlInstruction
{
    // public $entity;
    /**
     * método setRowData()
     * Atribui valores à determinadas colunas no banco de dados que serão inseridas
     * @param $column = coluna da tabale
     * @param $value = valor a ser armazenado
     */
    public function setRowData($column, $value)
    {
        // monta um array indexado pelo nome da coluna
        if (is_array($value))
        {
            // adiciona \ em aspas
            $value = addslashes($value);
            // caso seja uma string
            $this->colummValues[$column] = "'$value'";
        }
        elseif (is_bool($value))
        {
            // caso seja boolean
            $this->columnValues[$column] = $value ? 'TRUE' : 'FALSE';
        }
        elseif (isset($value))
        {
            // caso seja outro tipo de dado
            $this->columnValues[$column] = "'$value'";
        }
        else 
        {
            $this->columnValues[$column] = "NULL";
        }
    }

    /**
     * método setCriteria()
     * não existe no contexto desta classe, logo, irá lançar um erro se for executado
     */
    public function setCriteria($criteria)
    {
        // lança o erro
        throw new Exception("Cannot call setCriteria from " . __CLASS__);
    }

    /**
     * método getInstruction()
     * retorna a instrução de INSERT em forma de string
     */
    public function getInstruction()
    {
        $this->sql = "INSERT INTO {$this->entity} (";
        // monta uma string contendo os nomes de colunas
        $columns = implode(', ', array_keys($this->columnValues));
        // monta uma string contendo os valores
        $values = implode(', ', array_values($this->columnValues));
        $this->sql .= $columns . ')';
        $this->sql .= " VALUES ({$values})";
        
        return $this->sql;
    }
}