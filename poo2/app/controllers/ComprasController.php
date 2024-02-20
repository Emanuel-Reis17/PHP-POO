<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Compra;
use App\Controllers\Controlle;

class ComprasController extends Controlle
{
    public function index(Request $request, Response $response)
    {
        $compras = Compra::all();
        $this->lista = $compras;

        return $this->view('compras/index', $response);
    }
}
