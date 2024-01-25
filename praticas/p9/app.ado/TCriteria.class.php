<?php
final class TCriteria extends TExpression
{
    private $expressions;
    private $operators;
    private $properties;

    public function add(TExpression $expression, $operator = self::AND_OPERATOR)
    {
        if (empty($this->expressions))
        {
            $operator = NULL;
        }

        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    public function dump()
    {
        $result = '';
        if (is_array($this->expressions))
        {
            foreach ($this->expressions as $i => $expression)
            {
                $operator = $this->operators[$i];
                $result .= $operator . $expression->dump() . ' ';
            }
            $result = trim($result);
            return "({$result})";
        }
    }

    final public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;
    }

    final public function getProperty($property)
    {
        return $this->properties[$property];
    }
}