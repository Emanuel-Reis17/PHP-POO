<?php
class Biblioteca {
    const Nome = 'GTK ';
}

class Aplicacao extends Biblioteca {
    // Declaração das constantes
    const Ambiente = 'Gnome Desktop ';
    const Versao = '3.8 ';

    /* Método construtor
    *  acessa as constantes internamente
    */
    function __construct($Nome)
    {
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "\n";
    }
}

// Acessa as constantes externamente
echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "\n";
new Aplicacao('Dia');
new Aplicacao('Gimp');