<?php
# Criando arrays
$frutas = array('Maça', 'Banana', 'Uva', 'Manga');
$frutas2 = array(
    0 => 'Maça', 
    1 => 'Banana', 
    2 => 'Uva', 
    3 => 'Manga'
);
$nomes[] = 'Emanuel'; 
$nomes[] = 'Reis';
$nomes[] = 'Melissa';
$nomes[] = 'Iara';

// print_r($frutas);

# Arrays associativos
$cores = array(
    'vermelho' => 'FF0000', 
    'verde' => '00FF00', 
    'azul' => '0000FF'
);
$pessoa['nome'] = 'Emanuel';
$pessoa['rua'] = 'São Mateus';
$pessoa['bairro'] = 'Fazenda Coutos I';
$pessoa['cidade'] = 'Salvador';

// echo $cores['vermelho'] . "\n";
// echo $cores['verde'] . "\n";
// echo $cores['azul'] . "\n";

// echo $pessoa['nome'] . "\n";
// echo $pessoa['rua'] . "\n";
// echo $pessoa['bairro'] . "\n";
// echo $pessoa['cidade'] . "\n";

// foreach($cores as $chave => $fruta) {
//     echo "$chave => $fruta\n";
// };

# Arras multidimensionais
$carros = array(
    'Palio' => array(
        'cor' => 'azul', 
        'potencia' => 1.6, 
        'opcional' => 'Ar Cond.'
    ), 
    'Corsa' => array(
        'cor' => 'vermelho', 
        'potencia' => 1.0, 
        'opcional' => 'MP3.'
    ),
    'Gol' => array(
        'cor' => 'Branco', 
        'potencia' => 1.3, 
        'opcional' => 'Metalica'
    )
);

$carros['Fiesta']['cor'] = 'Prata';
$carros['Fiesta']['potencia'] = 'Nenhuma';
$carros['Fiesta']['opcinal'] = '4 rodas';
// print_r($carros);

// foreach($carros as $modelo => $caracteristicas) {
//     echo "=> Carro: $modelo \n";
//     foreach($caracteristicas as $caracteristica => $valor) {
//         echo "=> Caracteristica: $caracteristica => $valor \n";
//     }
// }

/*
"array_push()"     : Adiciona um novo elemento no array
"array_pop()"      : Remove um elemento do array
"array_shif()"     : Remove um elemento do início do array
"array_unshift()"  : Adiciona um elemento no início do array
"array_pad()"      : Preenche um array com uma determinada quantidade
"array_reverse()"  : Retorna um array invertido
"array_merge()"    : Mesclas 2 ou mais arrays
"array_keys()"     : Retorna um array com os índices
"array_values()"   : Retorna um array com os valores
"array_slice()"    : Retorna um pedaço do array 
"count()"          : Retorna a quantidade de elementos de um array
"in_array()"       : Verifica se o array contém um determinado valor
"sort()"           : Ordena um array pelos seus valores, não índices
"rsort()"          : Ordena um array na ordem reversa
"asort()"          : Ordena um array mantendo os índices
"ksort()"          : Ordena uma array pelos índices
"explode()"        : Converte uma string em array separando seus elementos por meio de um separador
"implode()"        : Converte um array em string separando seus elementos por meio de um separador

*/

// array_push($frutas, 'Goiba');
// array_pop($frutas);
// array_shift($frutas);
// array_unshift($frutas, 'Laranja');
// $frutas = array_pad($frutas, 8, 'Goiaba');
// $frutas = array_reverse($frutas, true);
// $c = array_merge($frutas, $nomes);
// $indices = array_keys($pessoa);
// $valores = array_values($carros);
// $b = array_slice($frutas, 1, 2);
// echo 'No array $frutas contém ' . count($frutas) . ' elementos.';
$bebidas = array('Refrigerante', 'Cerveja', 'Vodka', 'Suco natural');

// if (in_array('Vodka', $bebidas)) {
//     echo 'Vodka';
// }
$a = $bebidas;
$string = "31/12/2004";
// sort($a);
// rsort($a);
// asort($a);
// ksort($pessoa);
// print_r(explode('/', $string));
// $nome = implode(' - ', $nomes);
print_r($nome);
