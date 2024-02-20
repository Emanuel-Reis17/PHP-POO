<?php
namespace Helpers;

class Util
{
    final public static function trataValor($valor)
    {
        return 'R$'.number_format($valor, 2, ',', '.'); 
    }
}