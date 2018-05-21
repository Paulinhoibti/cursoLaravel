<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)['nome' => 'Maria', 'telefone' => '3333-4529'],
            (object)['nome' => 'Davi Gabriel', 'telefone' => '2143-4529'],
            (object)['nome' => 'Ana Clara', 'telefone' => '3523-4529']
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        return "Este é o Criar do ContatoController";
    }

    public function editar()
    {
        return "Este é o Editar do ContatoController";
    }
}
