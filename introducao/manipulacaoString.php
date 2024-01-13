<?php
# String literal com várias linhas
$texto = <<<CHAVE
Aqui nesta área
você poderá escrever
textos com múltiplas linhas
CHAVE;
// echo  $texto;

# Concatenação
$fruta = 'maçã';
echo $fruta . ' é a fruta de adão';
echo "{$fruta} é a fruta de adão";
echo "$fruta é a fruta de adão";

# Caracteres de escape
/*
"\n" : Nova linha
"\r" : Retorno de carro
"\t" : Tabulação
"\\" : Barra invertida
'\"' : Aspas duplas
'\$' : Símbolo de $
*/
echo "Meu nome é \"Emanuel\"";
echo 'Meu nome é "Emanuel"';
echo "Seu salário é R\$650,00";
echo 'Seu salário é $650,00';

# Manipulando o conteúdo
echo strtoupper("Convertendo para maiúsculas\n");
echo strtolower('CONVERTENDO PARA MINÚSCULAS');

$rest = substr('America', 1);
echo $rest. "\n";
$rest = substr('America', 1, 3);
echo $rest. "\n";
$rest = substr('America', -1);
echo $rest. "\n";
$rest = substr('America', -2);
echo $rest. "\n";

$pais = "Brasil";
echo str_pad($pais, 20, "*", STR_PAD_LEFT) . "\n";
echo str_pad($pais, 20, "*", STR_PAD_RIGHT) . "\n";
echo str_pad($pais, 20, "*", STR_PAD_BOTH);

echo str_repeat($pais, 5);

echo strlen($pais);

$txt = 'O Rato roeu a roupa do rei de Roma';
echo str_replace('Rato', 'Emanuel', $txt);

$txt = 'O Rato roeu a roupa do rei de Roma';
$encotrar = 'roupa';
$posicao = strpos($txt, $encotrar);
if ($posicao) {
    echo "String encontrada na posição: $posicao";
} else {
    echo 'String não encontrada';
}
