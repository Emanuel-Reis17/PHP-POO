<?php
# Carregar as classes
include_once('./classes/Conta.class.php');
include_once('./classes/Pessoa.class.php');

# Criação do objeto $carlos
$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = 'Carlos da Silva';
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = 'Ensino Médio';

echo "Manipulando o objeto $carlos->Nome :\n";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";
$carlos->Forma('Técnico em Eletricidade');
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

# Criação do objeto $conta_carlos
$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = 'CC.1234.56';
$conta_carlos->DataDeCriacao = '10/07/02';
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "Manipulando a conta: {$conta_carlos->Titular->Nome} \n";
echo "Saldo atual é R\${$conta_carlos->ObterSaldo()} \n";
$conta_carlos->Depositar(20);
echo "Saldo atual é R\${$conta_carlos->ObterSaldo()} \n";
$conta_carlos->Retirar(10);
echo "Saldo atual é R\${$conta_carlos->ObterSaldo()}";
