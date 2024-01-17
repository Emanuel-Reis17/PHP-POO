<?php
class Produto {
    public $Codigo;
    public $Nome;
    public $Preco;

    function SetPreco($Preco)
    {  
        if (is_numeric($Preco) and ($Preco > 0)) {
            $this->Preco = $Preco;
        }
    }

    function GetPreco() 
    {
        return $this->Preco;
    }

    function ImprimeEtiqueta()
    {
        echo "Nome  : {$this->Nome} \n";
        echo "Preco : {$this->Preco} \n";
    }
}