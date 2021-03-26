<?php

namespace App\Http\Controllers;

use App\Models\carro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        $carros = carro::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['carros' => $carros]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(Request $request){
        $carro = new carro();
        $carro->fabricante = $request->fabricante;
        $carro->modelo = $request->modelo;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;

        $carro->save();

        return redirect()->route('produtos');
    }

    public function show($id){
        $carro = carro::find($id);
        return view('produtos.show', ['carros' => $carro]);
    }

    public function edit(carro $carro){
        return view('produtos.edit', ['carro' => $carro]);
    }

    public function editar(Request $request, carro $carro){
        $carro->fabricante = $request->fabricante;
        $carro->modelo = $request->modelo;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;

        $carro->save();

        return redirect()->route('produtos');
    }

    public function deletar(carro $carro){
        $carro->delete();
        return redirect()->route('produtos');
    }

    public function deleteItem($id){
        $carros = carro::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['carros' => $carros, 'id' => $id]);
    }
}
