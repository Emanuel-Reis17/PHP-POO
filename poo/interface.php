<?php
interface IAluno {
    function getNome();
    function setNome();
    function setResponsavel(Pessoa $Responsavel);
}

class Aluno implements IAluno {
    function seNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome() 
    {
        return $this->nome;
    }
}

$joaninha = new Aluno;
$joaninha->setNome('Joana Maranhão');
echo $joaninha->getNome();
