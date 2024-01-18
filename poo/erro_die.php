<?php
function Abrir($file = null) 
{
    if (!$file) {
        die('Falta o parâmetro com o nome do arquivo.');
    }
    if (!file_exists($file)) {
        die('Arquivo não encontrado.');
    }
    if (!$retorno = @file_get_contents($file)) {
        die('Impossível ler o arquivo');
    }
    return $retorno;
}

// Abrindo o arquivo
$arquivo = Abrir('read.txt');
echo $arquivo;