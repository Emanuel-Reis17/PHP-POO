<?php
final class Estagiario extends Funcionario
{
    function __construct($pessoa, $cargo, $salario, $empresa)
    {
        parent::__construct($pessoa, $cargo, $salario, $empresa);
        $this->vale = 300.00;
    }

    function __toString()
    {
        return "Estagiário(a) <br>\n";
    }
}