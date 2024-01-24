<?php
/**
 * classe TSqlUpdate
 * Esta classe provê meios para manipulação de uma instrução  de UPDATE no banco de dados
 */
final class TSqlUpdate extends TSqlInstruction
{
    /**
     * método setRowData()
     * Atribui valores à determinadas colunas no banco de dados que serão modificadas
     * @param $column = coluna da tabela
     * @param $value = valor a ser armazenado
     */
    public function setRowData($column, $value)
    {
        // monta um array indexado pelo nome da coluna
        if (is_string($value))
        {
            // adiciona \ em aspas
            $value = addslashes($value);
            
            $this->columnValues[$column] = "'$value'";
        }
        elseif (is_bool($value))
        {
            // caso seja um booleano
            $this->columnValues[$column] = $value ? 'TRUE' : 'FALSE';
        }
        elseif (isset($value))
        {
            $this->$columnValues[$column] = $value;
        }
        else
        {
            // Caso seja NULL
            $this->columnValues[$column] = "NULL";
        }
    }

    /**
     * método getInstruction()
     * retorna a instrução SQL em forma de string
     */
    public function getInstruction()
    {
        // mostra a string de UPDATE
        $this->sql = "UPDATE {$this->entity}";

        // monta os pares: coluna=valor...
        if ($this->columnValues)
        {
            foreach ($this->columnValues as $column => $value)
            {
                $set[] = "{$column} = {$value}";
            }
        }
        $this->sql .= " SET ". implode(', ', $set);

        // retorna a cláusula WHERE do objeto $this->criteria
        if ($this->criteria)
        {
            $this->sql .= ' WHERE ' . $this->criteria->dump();
        }
        return $this->sql;
    }
}