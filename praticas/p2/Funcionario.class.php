<?php
class Funcionario {
    // Encapsulando classes
    private $Codigo;
    public $Nome;
    private $Nascimento;
    protected $Salario;

    // Método para acessar
    function GetSalario() {
        return $this->Salario;
    }

    // Método para setar
    function SetSalario($Salario) {
        if (is_numeric($Salario) and ($Salario > 0)) $this->Salario = $Salario;
     }
}