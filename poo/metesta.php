<?php
class Aplicacao {
    /* Método estático
    *  ler o arquivo readme.txt
    */
    static function Sobre() 
    {
        $fd = fopen('readme.txt', 'r');
        while ($linha = fgets($fd, 200)) {
            echo $linha;
        }
    }
}

echo "Informação da aplicação \n";
echo "===============================\n";
Aplicacao::Sobre();
