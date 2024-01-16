<?php
class Cesta {
    private $itens;
    var $total;

    function AdicionaItem(Produto $item)
    {
        $this->itens[] = $item;
    }

    function ExibeLista()
    {
        foreach($this->itens as $item) {
            $item->ImprimeEtiqueta();
        }
    }

    function CalculaTotal() {
        global $total;
        foreach($this->itens as $item) {
            $total += $item->Preco;
        }
        return 'R$' . $total;
    }
}

