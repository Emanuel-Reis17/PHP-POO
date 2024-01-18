<?php
function Abrir($file = NULL)
{
    if (!$file) 
    {
        throw new Exception('Falta o parâmetro do arquivo');
    }
    if (!file_exists($file))
    {
        throw new Exception('Arquivo não encontrado');
    }
    if (!$retorno = @file_get_contents($file))
    {
        throw new Exception('Impossível ler o arquivo');
    }
    return $retorno;
}

 /* Abrindo o arquivo
 * tratamento de exceções
 * */
try 
{
    $arquivo = Abrir('read.txt');
    echo $arquivo;
} 
catch (Exception $excecao)
{
    echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' # ' . $excecao->getMessage();
}
