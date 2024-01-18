<?php
class Fornecedor {
    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;
    private $CNPJ;
    public $Contato;

    // Método construtor
    function __construct($Codigo, $RazaoSocial, $Endereco, $Cidade, $CNPJ)
    {
        $this->Codigo = $Codigo;
        $this->RazaoSocial = $RazaoSocial;
        $this->Endereco = $Endereco;
        $this->Cidade = $Cidade;
        $this->CNPJ = $CNPJ;
        $this->Contato = new Contato;
    }

    // Método __set($propriedade, $valor)
    function __set($name, $value)
    {
        $this->$name = $value;
    }

    // Seta o contato do fornecedor
    function SetContato($Ceo, $Email, $Telefone)
    {
        $this->Contato->SetContato($Ceo, $Email, $Telefone);
    }

    // Imprime o contato do fornecedor
    function GetContato()
    {
        $this->Contato->GetContato();
    }

    // Método __get($propriedade)
    function __get($name)
    {
        return $this->$name;
    }

    function __toString()
    {
        return "Fornecedor: {$this->RazaoSocial}\n";
    }

    function __call($name, $arguments)
    {
        echo "O método '$name' não existe. \n";
        foreach($arguments as $argument) {
            print "Parâmetro: $argument \n";
        }
    }

    function __destruct()
    {
        echo 'Finalizando a aplicação..';
    }
}