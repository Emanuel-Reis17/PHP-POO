<?php
/**
 * Classe TFilter
 * Esta classe provê uma interface para definição de filtros de seleção
 */
class TFilter extends TExpression
{
    private $variable; // variável
    private $operator; // operador
    private $value;    // valor

    /**
     * Método __construct()
     * Instancia um novo filtro
     * @param $variable = variável
     * @param $operator = operador
     * @param $value    = valor a ser comparado
     */
    public function __construct($variable, $operator, $value)
    {
        // Armazena as proprieadades
        $this->variable = $variable;
        $this->operator = $operator;
        // Transforma a variável com certas regras
        // antes de atribuir à propriedade $this->value
        $this->value = $this->transform($value);
    }

    /**
     * Método transform
     * Recebe um valor e faz as modificações necessárias
     * para ele ser interpretado pelo banco de dados
     * podendo ser um interger/string/boolean ou array
     * @param $value = valor a ser transformado
     */
     private function transform($value)
     {
        // Caso seja um array
        if (is_array($value))
        {
            // Percorre os valores
            foreach ($value as $x)
            {
                // Se for um inteiro
                if (is_integer($x))
                {
                    $foo[] = $x;
                }
                // Se for string
                elseif (is_string($x))
                {
                    $foo[] = "'$x'";
                }
            }
            // Converte o array em por ','
            $result = '(' . implode(',', $foo) . ')';
        }
        elseif (is_string($value))
        {
            // Adiciona aspas
            $result = "'$value'";
        }
        // Caso seja nulo
        elseif (is_null($value))
        {
            // Armazena NUL
            $result = NULL;
        }
        // Caso seja booleano
        elseif (is_bool($value))
        {
            $result = $value ? 'TRUE' : 'FALSE';
        }
        else 
        {
            $result = $value;
        }
        // Retorna o valor
        return $result;
     }

     /**
      * Método dump
      * retorna o filtro em forma de expressão
      */
      public function dump()
      {
        // Concatena a expressão
        return "{$this->variable} {$this->operator} {$this->value}";
      }
}