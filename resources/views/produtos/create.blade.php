@extends('layouts.templete')
@section('title', 'Criar Produto')
@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{route('insert')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fabricante">Fabricante</label>
                        <input type="text" class="form-control" id="" name="fabricante" placeholder="Fabricante">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="" name="modelo" placeholder="Modelo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cor">Cor</label>
                        <input type="text" class="form-control" id="" name="cor" placeholder="cor">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="number" class="form-control" id="" name="preco" step="0.010" placeholder="Valor">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection('content')