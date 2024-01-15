<?php
# Usando constructor e destructor
abstract class Conta {
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    function Retirar($quantia) {
        if ($quantia > 0) {
            $this->Saldo -= $quantia;
        }
    }

    function Depositar($quantia) {
        if ($quantia > 0) {
            $this->Saldo += $quantia;
        }
    }

    function ObterSaldo() {
        return $this->Saldo;
    }

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo) {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;

        // $this->Depositar($Saldo);
        $this->Cancelada = false;
    }

    function __destruct() {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada.. \n";
    }
}
