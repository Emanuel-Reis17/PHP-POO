<?php
abstract class Aplicacao {
    static function LerArquivo($arquivo)
    {
        $fd = fopen($arquivo, 'r');
        while ($linha = fgets($fd, 200)) {
            echo $linha;
        }
    }
}

Aplicacao::LerArquivo('text.txt');