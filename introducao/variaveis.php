<?php
# Tipos de Variáveis 
// NÃO EXECUTAR O CÓDIGO ANTES DE COMENTAR AS PARTE DESNECESSÁRIAS !!!
// Referência 
$a = "Nome";
$$a = "Emanuel";

echo $Nome;

// Referenciando com o operador "&"
$b = 5;
$c = &$b;

// echo $b . " " . $c;
$c = 10;
// echo $b . " " . $c;

// Tipo boolean
$umidade = 91;
$vai_chover = ($umidade > 90);
if ($vai_chover) {
    echo 'Está chovendo';
}

// Array
$carros = array('Corsa', 'Fiesta', 'Uno');
print_r($carros);

// Objetos
class Computador {
    var $cpu;
    function ligar() {
        echo "Ligando computador a {$this->cpu}";
    }
}

$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();

// Recurso (resource)
mysqli_connect();

// Misto (mixed)
echo gettype($obj);

// Callback
call_user_func(function(){});

// Constantes
define("MAXIMO_CLIENTES", 100);
echo MAXIMO_CLIENTES;
