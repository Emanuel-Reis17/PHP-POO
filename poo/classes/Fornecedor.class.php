<?php
class Fornecedor {
    var $Codigo;
    var $RazaoSocial;
    var $Endereco;
    var $Cidade;
    var $Contato;

    # Método construtor
    function __construct()
    {
        // Instancia novo Contato
        $this->Contato = new Contato;
    }

    # Grava contato
    function SetContato($Nome, $Telefone, $Email)
    {
        // Delega a chamada do método
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }

    # Retorna contato
    function GetContato() 
    {
        return $this->Contato->GetContato();
    }
}
