<?php
class Cachorro {
    private $Nascimento;

    # Método construtor
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    # Intercepta atribuição
    function __set($propriedade, $valor)
    {
        if ($propriedade == 'Nascimento') {
            if (count(explode('/', $valor)) == 3) {
                echo "Dado '$valor' , atribuido à '$propriedade' \n";
                $this->$propriedade = $valor;
            } else {
                echo "Dado '$valor', não atribuido à '$propriedade' \n";
            }
        } else {
            $this->$propriedade = $valor;
        }
    }
}
