<?php

# Variável global
$total = 0;
function km2mi($quilometros) {
    global $total;
    $total += $quilometros;
    $quilometros *= 0.6;
    echo "Percorreu $quilometros milhas\n";
}
// km2mi(100);
// km2mi(120);
// echo $total;

# Variável estática
function percorre($quilometros) {
    static $total;
    $total += $quilometros;
    echo "Percorreu $quilometros quilometros do total de $total\n";
}
// percorre(100);
// percorre(500);
// percorre(20);

# Passando argumentos (by value)
function soma($variavel, $valor) {
    return $variavel += $valor;
}
$a = 0;
// echo soma($a, 20);

# Passando argumentos (by reference)
function sum(&$variavel, $valor = 40) {
    $variavel += $valor;
}
$a = 0;
// sum($a, 20);
// echo $a;

# Sem argumentos
function Ola() {
    $argumentos = func_get_args();
    $quantidade = func_num_args();

    for ($n = 0; $n < $quantidade; $n++) {
        echo "Olá $argumentos[$n], prazer em conhecer.\n";
    }
}
Ola("Emanuel", "Reis", "Melissa", "Iara");