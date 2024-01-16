<?php
class Produto {
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Fornecedor;
    var $Quantidade;

    function ImprimeEtiqueta() {
        echo 'Código:    ' . $this->Codigo . "\n";
        echo 'Descrição: ' . $this->Descricao . "\n";
    }
}
