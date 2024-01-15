<?php
class Produto {
    var $Codigo;
    var $Preco;
    var $Descricao;
    var $Quantidae;

    function ImprimeEtiqueta() {
        echo 'Código:    ' . $this->Codigo . "\n";
        echo 'Descrição: ' . $this->Descricao . "\n";
    }
}
