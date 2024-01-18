<?php
function Abrir($file = NULL) {
    if (!$file) {
        return false;
    }
    if (!file_exists($file)) {
        return false;
    }
    if (!$retorno = @file_get_contents($file)) {
        return false;
    }
    return $retorno;
}

$arquivo = Abrir('read.txt');
if (!$arquivo) {
    echo 'Arquivo não encontrado';
} else {
    echo $arquivo;
}