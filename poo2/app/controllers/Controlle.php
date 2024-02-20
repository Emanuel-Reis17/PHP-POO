<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;

class Controlle
{
    public function view(String $view, Response $response):Response 
    {
        $pagina = include '../app/views/'.$view.'.php';
        $response->getBody()->getContents($pagina);
        return $response;
    }

    public function layout(String $caminho):void
    {
        $caminho = str_replace('.', '\\', $caminho);
        include(dirname(__FILE__, 2).'\views\\'.$caminho.'.php');
    }
}
