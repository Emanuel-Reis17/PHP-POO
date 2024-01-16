<?php
abstract class Conta {
    var $Agencia;
    var $Codigo;
    var $Nome;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    // Sacar dinheiro
    function Sacar($quantia)
    {
        if ($quantia > 0 and $quantia <= $this->Saldo) { 
            $this->Saldo -= $quantia;
        } else {
            echo "Saque não permitido.. \n";
            return false;
        }
        echo "Saque realizado.. \n";
    }

    // Depositar dinheiro
    function Depositar($quantia)
    { 
        if ($quantia > 0) {
            $this->Saldo += $quantia;       
        }
        echo "Deposito realizado com sucesso.. \n";
        return true;
    }

    // Obter o saldo da conta
    function ObterSaldo() 
    {
        echo "Saldo atual de R\${$this->Saldo} \n";
    }

    // Função construtora
    function __construct($Agencia, $Codigo, $Nome, $Senha, $Saldo, $Cancelada)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;
        $this->Cancelada = $Cancelada;
    }

    // Função destrutora
    function __destruct()
    {
        echo "Finalizando a aplicação.. \n";
    }
}
;