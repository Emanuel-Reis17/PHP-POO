<?php
final class ContaPoupanca extends Conta {
    var $Aniversario;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario) {
        // chamada do método construtor da classe-pai
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }

    function Retirar($quantia) {
        if ($this->Saldo >= $quantia) {
            parent::Retirar($quantia);
        } else {
            echo 'Retirada não permitida... \n';
            return false;
        }
        return true;
    }

    final function Transferir($Conta, $Valor)
    {
        if ($this->Retirar($Valor)) {
            $Conta->Depositar($Valor);
        }
    }
}