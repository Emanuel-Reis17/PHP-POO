<?php
# Operadores
// NÃO EXECUTAR O CÓDIGO ANTES DE COMENTAR AS PARTE DESNECESSÁRIAS !!!
// Atribuição
$var = 2;
$var += 5; // Soma 5 em $var
$var -= 5; // Subtrai 5 em $var
$var *= 5; // Multiplica $var em 5
$var /= 5; // Divide $var em 5

++$var; // Pré-incremento
$var++; // Pós-incremento
--$var; // Pré-decremento
$var--; // Pós-decremento

# Relacionais
/*
"==" : Igual
"===" : Idêntico
"!=" : Não igual
"!==" : Não idêntico
*/
if (5 === '5') {
    echo "sim";
} else {
    echo "não";
}

$e = 0;
// // Zero é sempre igual a FALSE
if ($e == FALSE) {
    echo '$e é false';
}
// // Testa se $e é do tipo FALSE
if ($e === FALSE) {
    echo '$e é do tipo FALSE';
}
// // Testa se $e é igaul a zero e do mesmo tipo que zero
if ($e === 0) {
    echo '$e é zero mesmo';
}

# Lógicos
/*
and : E, Verdadeiro se ambos forem verdadeiros
or : OU, Verdadeiro se um OU outro forem verdadeiros
xor : XOR, Verdadeiro se um ou outro forem verdadeiros de forma exclusiva
*/
$vai_chover = TRUE;
$esta_frio = TRUE;

if ($vai_chover and $esta_frio) {
    echo 'Não vou sair de casa';    
}

# Estrutura de Controle (Condicionais)
$salario = 1220;
$tempo_servico = 12;
$tem_reclamacao = false;

if ($salario >= 1200) {
    if ($tempo_servico == 12) {
        if ($tem_reclamacao != true) {
            echo 'Parabéns você foi promovido';
        }
    }
}

if (($salario >= 1200) and ($tempo_servico == 12) and ($tem_reclamacao != true)) {
    echo 'Parabéns você foi promovido';
}

# While
$a = 5;
while ($a != 0) {
    echo $a;
    $a--;
}

# For
for ($i = 1; $i <= 10; $i++) {
    print $i;
}

# Switch
for ($i = 1; $i <= 10; $i++) {
    switch ($i) {
        case 0:
            print 'i é igual a 0';
            break;
        case 8:
            print 'i é igual a 8';
            break;
        case 2:
            print 'i é igual a 2';
            break;
        default:
            print 'i é diferente de todos os números';
            continue 2;
    }
}

# ForEach
$frutas = array('Maça', 'Manga', 'Uva', 'Banana');
foreach($frutas as $valor) {
    print " $valor -";
}

