<?php
class ParameterExcepition extends Exception {};
class FileNotFoundException extends Exception {};
class FilePermissionException extends Exception{};

function OpenFile($file) 
{
    if (!$file)
    {
        throw new ParameterException('No parameter has been provided!');
    } 
    else if (!file_exists($file))
    {
        throw new FileNotFoundException('This file doesn\'t exist!');
    }
    elseif (!$retorno = @file_get_contents($file))
    {
        throw new FilePermissionException('This file can\'t be opened!');
    }
    return $retorno;
}

try 
{
    $archive = OpenFile('file.txt');
    echo $archive;
}
catch (ParameterException $exception)
{
    var_dump($exception);
}
catch (FileNotFoundException $exception)
{
    var_dump($exception->getTraceAsString());
    echo "Finalizando a aplicação.. \n";
}
catch (FilePermissionException $exception)
{
    echo $exception->getFile() . ' : ' . $exception->getLine() . ' # ' . $exception->getMessage();
}
