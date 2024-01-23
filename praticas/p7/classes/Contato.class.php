<?php
class Contato 
{
    private $numero;
    private $email;
    private $endereco;

    function __construct($numero, $email, $endereco)
    {
        $this->numero = $numero;
        $this->email = $email;
        $this->endereco = $endereco;
    }
}