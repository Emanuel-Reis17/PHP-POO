<?php
include_once('./classes/Conta.class.php');
include_once('./classes/ContaCorrente.class.php');

class ContaCorrenteEspecial extends ContaCorrente {
    function Depositar($Valor)
    {
        parent::Depositar($Valor);
    }

    function Transferir($Conta, $Valor) 
    {
        parent::Transferir($Conta, $Valor);
    }
}