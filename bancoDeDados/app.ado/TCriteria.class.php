<?php
/**
 * Classe TCriteria
 * Esta classe provê uma interface utilizada para a definição de critério
 */
class TCriteria extends TExpression 
{
    private $expressions;  // Armazena a lista de expressões
    private $operators;   // Armazena a lista de operadores
    private $properties;  // Propriedades do critério

    /**
     * Método add()
     * adiciona uma expressão ao critério
     * @param $expression = expressão (objeto TExpression)
     * @param $operator = operador lógico de comparação
     */
    public function add(TExpression $expression, $operator = self::AND_OPERADOR)
    {
        // Na primeira vez, não precisamos de operador para concatenar
        if (empty($this->expressions))
        {
            $operator = null;
        }

        // Agrega o resultado da expressão à lista de expressões
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    /**
     * método dump()
     * retorna a expressão final
     */
    public function dump()
    {
        $result = '';
        // concatena a lista de expressão
        if (is_array($this->expressions))
        {
            foreach ($this->expressions as $i => $expression)
            {
                $operator = $this->operators[$i];
                // concatena o operador com a respectiva expressão
                $result .= $operator . $expression->dump() . ' ';
            }
            $result = trim($result);
            return "({$result})";
        }
    }

    /**
     * Método setProperty()
     * define o valor de uma propriedade
     * @param $property = propriedade
     * @param $value    = valor
     */
    public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;
    }

    /**
     * Método getProperty()
     * retorna o valor de uma propriedade
     * @param $property = propriedade
     */
    public function getProperty($property)
    {
        return $this->properties[$property];
    }
}