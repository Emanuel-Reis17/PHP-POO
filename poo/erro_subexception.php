<?php
// Definições da subclasses de erro
class ParameterException extends Exception {};
class FileNotFoundException extends Exception {};
class FilePermissionException extends Exception {};

function Abrir($file = NULL)
{
    if (!$file)
    {
        throw new ParameterException('Falta o parâmetro do arquivo');
    }
    if (!file_exists($file))
    {
        throw new FileNotFoundException('Arquivo não encontrado');
    }
    if (!$retorno = @file_get_contents($file))
    {
        throw new FilePermissionException('Impossível ler o arquivo');
    }
    return $retorno;
}

try 
{
    $arquivo = Abrir('read.txt');
    echo $arquivo;
}
catch (ParameterException $excecao)
{
    // Não faz nada
}
catch (FileNotFoundException $excecao)
{
    var_dump($excecao->getTrace());
    echo "Finalizando aplicação... \n";
    die();
}
catch (FilePermissionException $excecao)
{
    echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' # ' . $excecao->getMessage();
}