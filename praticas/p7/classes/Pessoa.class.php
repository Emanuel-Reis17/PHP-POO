<?php
class Pessoa 
{
    public $nome;
    public $idade;
    public $formacao;
    private $CPF;
    public $contato;

    function __construct($nome, $idade, $formacao, $CPF)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->formacao = $formacao;
        $this->CPF = $CPF;
    }

    function __get($name)
    {
        return $this->$name;
    }

    function setContato($numero, $email, $endereco)
    {
        $this->contato = new Contato($numero, $email, $endereco);
    }
}