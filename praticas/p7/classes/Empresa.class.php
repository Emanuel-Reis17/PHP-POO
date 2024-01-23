<?php
class Empresa 
{
    public $RazaoSocial;
    public $Servico;
    private $CNPJ;
    private $Ceo;
    private $contato;

    function __construct($RazaoSocial, $Servico, $CNPJ, $Ceo)
    {
        $this->RazaoSocial = $RazaoSocial;
        $this->Servico = $Servico;
        $this->CNPJ = $CNPJ;
        $this->Ceo = $Ceo;
    }

    function setContato($numero, $email, $endereco)
    {
        $this->contato = new Contato($numero, $email, $endereco);
    }
}