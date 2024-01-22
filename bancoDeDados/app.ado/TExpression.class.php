<?php
/*
* Classe TExpression
* classe abstrata para gerenciar expressões
*/
abstract class TExpression {
    // Operadores lógicos
    const AND_OPERADOR = 'AND ';
    const OR_OPERADOR = 'OR ';
    // Marca método dump como obrigatório
    abstract public function dump();
}