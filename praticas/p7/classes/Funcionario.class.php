<?php
class Funcionario 
{
    public $pessoa;
    public $cargo;
    protected $salario;
    public $empresa;

    function __construct($pessoa, $cargo, $salario, $empresa)
    {
        $this->pessoa = $pessoa;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->empresa = $empresa;
    }

    function __get($name)
    {
        if ($name == 'salario')
        {
            return "R\${$this->salario}.00 <br>\n";
        }
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __call($name, $arguments)
    {
        echo "O método $name não existe..\n";
        foreach ($arguments as $c => $argument)
        {
            echo "Parâmetro: $c => $argument <br>\n";
        }
    }

    function __toString()
    {
        return "Funcionario <br>\n";
    }
}