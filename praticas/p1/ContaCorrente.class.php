<?php
final class ContaCorrente extends Conta {
    var $Limite;

    function __construct($Agencia, $Codigo, $Nome, $Senha, $Saldo, $Cancelada, $Limite)
    {
        parent::__construct($Agencia, $Codigo, $Nome, $Senha, $Saldo, $Cancelada);
        $this->Limite = $Limite;
    }
    
    // Sacar dinheiro
    function Sacar($quantia)
    {
        if ($quantia > 0) {
            if (($this->Saldo + $this->Limite) >= $quantia) {
                parent::Sacar($quantia);
                $this->Limite -= $quantia;
            }
        }
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

    function Transferir($Conta, $quantia) 
    {
        if ($quantia > 0)
        {
            $Conta->Depositar($quantia);
            $this->Saldo -= $quantia;
        }
    }
}
