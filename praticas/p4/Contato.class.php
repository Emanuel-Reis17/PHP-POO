<?php
class Contato {
    public $Ceo;
    public $Email;
    public $Telefone;

    // Seta as informações
    function SetContato($Ceo, $Email, $Telefone)
    {
        $this->Ceo = $Ceo;
        $this->Email = $Email;
        $this->Telefone = $Telefone;
    }

    // Imprime as informações
    function GetContato()
    {
        echo "====INFORMAÇÕES====\n";
        echo "CEO      : {$this->Ceo}\n";
        echo "Email    : {$this->Email}\n";
        echo "Telefone : {$this->Telefone}\n";
    }
}
