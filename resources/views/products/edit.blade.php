@extends('layouts.templete')
@section('title', 'Editar Produto')
@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{route('products.put.editar', $carro)}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fabricante">Fabricante</label>
                        <input type="text" class="form-control" id="" name="fabricante" value="{{$carro->fabricante}}" placeholder="Fabricante">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="" name="modelo" value="{{$carro->modelo}}" placeholder="Modelo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cor">Cor</label>
                        <input type="text" class="form-control" id="" name="cor" value="{{$carro->cor}}" placeholder="cor">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="number" class="form-control" id="" name="preco" value="{{$carro->preco}}" step="0.010" placeholder="Valor">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection('content')