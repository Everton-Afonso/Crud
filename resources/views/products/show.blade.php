@extends('layouts.templete')
@section('title', 'Produto')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Fabricante: <?php echo $carros->fabricante ?></h1>
        <hr class="my-4">
        <p class="lead">Modelo: <?php echo $carros->modelo ?></p>
        <p class="lead">Modelo: <?php echo $carros->cor ?></p>
        <p class="lead">Modelo: <?php echo $carros->preco ?></p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('products')}}" role="button">Voltar</a>
        </p>
    </div>
@endsection