<?php
class Cesta {
    public $itens;

    function AdicionaItem(Produto $item) 
    {
        $this->itens[] = $item;
    }

    function ExibirItens() 
    {
        foreach($this->itens as $item) {
            $item->ImprimeEtiqueta();
        }
    }

    function CalculaTotal() 
    {
        global $total;
        foreach($this->itens as $item) {
            $total += $item->Preco;
        }
        echo "Total de: R\$$total \n";
    }
}