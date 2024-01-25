<?php
/**
 * Classe TFilter
 * Esta classe será responsável pela filtragem e montagem das expressões SQL de critérios
 */
final class TFilter extends TExpression
{
    private $variable; // variável
    private $operator; // operador
    private $value;    // valor

    /**
     * método construtor
     */
    public function __construct($variable, $operator, $value)
    {
        $this->variable = $variable;
        $this->operator = $operator;
        $this->value = $this->transform($value);
    }

    private function transform($value)
    {
        $result = '';
        if (is_array($value))
        {
            foreach ($value as $x)
            {
                if (is_integer($x))
                {
                    $foo[] = $x;
                }
                elseif (is_string($x))
                {
                    $foo[] = "'$x'";
                }
            }
            $result = '(' . implode(', ', $foo) . ')';
        } 
        elseif (is_string($value))
        {
            $result = addslashes($value);
        }
        elseif (is_bool($value))
        {
            $result = $value ? 'TRUE' : 'FALSE';       
        }
        elseif (is_null($value))
        {
            $result = NULL;
        }
        else
        {
            // possível erro!
            $result = $value;
        }
        return $result;
    }

    final public function dump()
    {
        return "{$this->variable} {$this->operator} {$this->value}";
    } 
}
