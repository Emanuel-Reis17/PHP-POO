<?php
require __DIR__ . '/vendor/autoload.php';
use App\Util;
use App\Confing\SiteInfo;

interface IUsuario 
{
    public function alteraSenha($senha);
    public function __get($name);

}

abstract class Usuario implements IUsuario
{
    public $id;
    public $nome;
    public $email;
    // private $senha;
    protected $senha;
    public $telefone;
    public $assinante;

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }

    abstract public function __get($name);
}

class Admin extends Usuario implements IUsuario
{
    public function setSenha($senha)
    {
        $senha = $senha.$this->email;
        parent::alteraSenha($senha);
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

// class Gerente extends Usuario
// {

// }

class Vendedor extends Usuario implements IUsuario
{
    public function __get($name)
    {
        return $this->$name;
    }
}

class Cliente 
{
    public $id;
    public $nome;
    public $email;
    private $senha;
    public $telefone;
    public $assinante;

    public function exibeNome()
    {
        return 'Nome: '.$this->nome;
    }

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }
}

class Assinatura 
{
    private $id;
    private $id_cliente;
    private $titulo;
    private $valor;

    public function __construct($id = null, $id_cliente = null, $titulo = null, $valor = null)
    {
        $this->id = $id;
        $this->id_cliente = $id_cliente;
        $this->titulo = $titulo;
        $this->valor = $valor;
    }

    public function exibeAssinatura()
    {
        $html = '<p>';
        $html .= "<strong>ID:</strong> $this->id";
        $html .= '</p>';

        $html .= '<p>';
        $html .= "<strong>ID do Cliente:</strong> $this->id_cliente";
        $html .= '</p>';

        $html .= '<p>';
        $html .= "<strong>Titulo:</strong> $this->titulo";
        $html .= '</p>';
        
        $html .= '<p>';
        // $html .= '<strong>Valor:</strong> '.$this->trataValor($this->valor);
        $html .= '<strong>Valor:</strong> '.Util::trataValor($this->valor);
        $html .= '</p>';

        echo $html;
    }

    private function trataValor($valor)
    {
        return 'R$'.number_format($valor, 2, ',', '.');
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$emanuel = new Cliente;
$emanuel->id = 1;
$emanuel->nome = 'Emanuel Reis';
$emanuel->email = 'emanuel@mail.com';
// $emanuel->senha = '123456';
$emanuel->alteraSenha('123456');
$emanuel->telefone = '71986558745';
$emanuel->assinante = true;

$assinaturaEmanuel = new Assinatura(1, $emanuel->id, 'Ass. Vip', 85.90);

$melissa = new Admin;
$melissa->id = 1;
$melissa->nome = 'Melissa Reis';
$melissa->email = 'melissa@mail.com';
$melissa->setSenha('123456789');
$melissa->telefone = '1241354536';
$melissa->assinante = true;
echo 'Senha: <strong>'.$melissa->senha.'<strong><br>';

// var_dump($melissa);
/*
$assinaturaEmanuel->id = 1;
$assinaturaEmanuel->id_cliente = $emanuel->id;
$assinaturaEmanuel->titulo = 'Ass. Vip';
$assinaturaEmanuel->valor = 75.90;
*/
// var_dump($assinaturaEmanuel);
// $assinaturaEmanuel->exibeAssinatura();

$iara = new Vendedor;
$iara->id = 1;
$iara->nome = 'Melissa Reis';
$iara->email = 'melissa@mail.com';
$iara->alteraSenha('123456789');
$iara->telefone = '1241354536';
$iara->assinante = true;

echo 'Nome do site: '.SiteInfo::$nome;
echo '<br>';
echo 'Descrição do site: '.SiteInfo::$descricao;