<?php
class Aplicacao {
    static $Quantidade;

    /* Método construtor
    *  incrementa a $Quantidade de aplicações
    */
    function __construct($Nome)
    {
        self::$Quantidade++;
        $i = self::$Quantidade;
        echo "Nova aplicação nº$i: $Nome \n";
    }
}

# Cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Número total de aplicações: ' . Aplicacao::$Quantidade . "\n";