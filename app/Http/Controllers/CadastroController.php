<?php

namespace App\Http\Controllers;

use App\Models\carro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        $carros = carro::orderby('id', 'desc')->paginate();
        return view('products.index', ['carros' => $carros]);
    }

    public function create(){
        return view('products.create');
    }

    public function insert(Request $request){
        $carro = new carro();
        $carro->fabricante = $request->fabricante;
        $carro->modelo = $request->modelo;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;

        $carro->save();

        return redirect()->route('products');
    }

    public function show($id){
        $carro = carro::find($id);
        return view('products.show', ['carros' => $carro]);
    }

    public function edit(carro $carro){
        return view('products.edit', ['carro' => $carro]);
    }

    public function editar(Request $request, carro $carro){
        $carro->fabricante = $request->fabricante;
        $carro->modelo = $request->modelo;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;

        $carro->save();

        return redirect()->route('products');
    }

    public function deletar(carro $carro){
        $carro->delete();
        return redirect()->route('products');
    }

    public function deleteItem($id){
        $carros = carro::orderby('id', 'desc')->paginate();
        return view('products.index', ['carros' => $carros, 'id' => $id]);
    }
}
