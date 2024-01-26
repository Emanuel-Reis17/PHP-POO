<?php
/**
 * classe Pessoa
 * Esta classe cria uma instância de pessoa
 */
final class Pessoa
{
    /**
     * Método __constructor()
     * @param $nome = nome da pessoa
     * @param $anoNascimento = data de nascimento
     * @param $anoAtual = ano atual
     */
    public function __construct($nome, $anoNascimento, $anoAtual)
    {
        $this->nome = $nome;
        $this->anoNascimento = $anoNascimento;
        $this->anoAtual = $anoAtual;
    }

    final public function calcIdade()
    {
        $result = $this->anoAtual - $this->anoNascimento;
        return "Olá sr.{$this->nome}! Você tem $result anos de idade.<br>\n";
    }

    /**
     * Método calcSalario()
     * Este método calcula o valor do salário da pessoa com 
     * os devidos valores descontados
     */
    final public function calcSalario($horaTrabalhada, $valorHora, $percDesconto = NULL)
    {

        $salarioLiquido = $valorHora * $horaTrabalhada;
        $salarioBruto = $salarioLiquido * 25;
        $valorDesconto = (8 / 100) * $salarioBruto;
        $salarioBruto -= $valorDesconto;
        return "Diária: <strong>R\$$salarioLiquido</strong> <br> Mês: <strong>R\$$salarioBruto</strong> <br> Desconto: <strong>R\$$valorDesconto</strong>";
    }
}

$emerson = new Pessoa('Emerson Mateus', 1950, 2024);
echo $emerson->calcIdade() . "\n";
echo $emerson->calcSalario(9, 5.88);

/**
 * hora trabalhad
 * valor hora
 * % desconto
 * 
 * salario liquido
 * valor da htra
 * sala = gt * 
 */