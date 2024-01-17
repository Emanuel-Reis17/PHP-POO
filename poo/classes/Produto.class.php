<?php
class Produto {
    var $Codigo;
    var $Descricao;
    var $Quantidade;
    private $Preco;
    var $Fornecedor;
    const MARGEM = 10;

    # Método construtor de produto
    function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }

    # Intercepta a obtenção de propriedades
    function __get($propriedade) {
        echo "Obtendo o valor de '$propriedade': \n";
        if ($propriedade == 'Preco') {
            return $this->$propriedade * (1 + (self::MARGEM / 100));
        }
    }

    # Intercepta chamada a métodos
    function __call($metodo, $parametros)
    {
        echo "Você executou o método: {$metodo} \n";
        foreach($parametros as $key => $parametro) {
            echo "\tParâmetro $key: $parametro \n";
        }
    }

    function ImprimeEtiqueta() {
        echo 'Código:    ' . $this->Codigo . "\n";
        echo 'Descrição: ' . $this->Descricao . "\n";
    }
}
