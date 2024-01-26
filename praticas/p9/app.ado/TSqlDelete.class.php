<?php
spl_autoload_register(function ($class) 
{
    include_once('./' . $class. '.class.php');
});
final class TSqlDelete extends TSqlInstruction
{
    public function getInstruction()
    {
        $this->sql = "DELETE FROM {$this->entity}";
        
        if ($this->criteria) 
        {
            $expression = $this->criteria->dump();
            if ($expression)
            {
                $this->sql .= ' WHERE ' . $expression;
            }
        }
        return $this->sql;
    }
}
