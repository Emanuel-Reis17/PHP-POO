<?php
final class ContaPoupanca extends Conta {
    var $Aniversario;

    function __construct($Agencia, $Codigo, $Nome, $Senha, $Saldo, $Cancelada, $Aniversario)
    {
        parent::__construct($Agencia, $Codigo, $Nome, $Senha, $Saldo, $Cancelada);
        $this->Aniversario = $Aniversario;
    }

    // Sacar dinheiro
    function Sacar($quantia)
    {
        if ($quantia > 0 and $quantia <= $this->Saldo) parent::Sacar($quantia);
    }

    // Depositar dinheiro
    function Depositar($quantia)
    {
        if ($quantia > 0) parent::Depositar($quantia);
    }

    // Obter o saldo da conta
    function ObterSaldo()
    {
        parent::ObterSaldo();
    }
}
