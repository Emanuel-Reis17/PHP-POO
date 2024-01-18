<?php
function Abrir($file = NULL)
{
    if (!$file) {
        trigger_error('Falta o parâmetro do arquivo', E_USER_NOTICE);
        return false;
    }
    if (!file_exists($file)) {
        trigger_error('Arquivo não encontrado', E_USER_WARNING);
        return false;
    }
    if (!$retorno = @file_get_contents($file)) {
        trigger_error('Impossível ler o arquivo', E_USER_ERROR);
        return false;
    }
    return $retorno;
}

// Função par manipular o erro
function manipula_erro($numero, $mensagem, $arquivo, $linha)
{
    $mensagem = "Arquivo $arquivo: linha $linha # n°$numero : $mensagem\n";

    // escreve no log todo tipo de erro
    $log = fopen('erros.log', 'a');
    fwrite($log, $mensagem);
    fclose($log);

    // Se for WARNING
    if ($numero == E_USER_WARNING) {
        echo $mensagem;
    } // Se for um erro FATAL
    elseif ($numero == E_USER_ERROR) {
        echo $mensagem;
        die();
    }
}

// Define a função manipuladora de erros
set_error_handler('manipula_erro');

// Abrindo o arquivo
$arquivo = Abrir('read.txt');
echo $arquivo;