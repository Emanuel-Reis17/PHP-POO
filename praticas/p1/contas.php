<?php
// include_once('./Conta.class.php');
// include_once('./ContaPoupanca.class.php');
// include_once('./ContaConrrente.class.php');

spl_autoload_register(function ($class) {
    include_once('./' . $class . '.class.php');
});
// Conta corrente
$conta1 = new ContaCorrente(0001, '1234-56', 'Juliana Nakomoto', 6969, 10.00, false, 500.00);
// $conta1->Sacar(30.00);

// Conta Poupanca
$conta2 = new ContaPoupanca(0001, '1234-56', 'Emanuel Reis', 6969, 500.00, false, '26/02');
$conta1->Transferir($conta2, 5.00);
// print_r(get_object_vars($conta1));
// $conta1->Sacar(20.00);
// $conta1->Depositar(1000.00);
print_r(get_object_vars($conta2));