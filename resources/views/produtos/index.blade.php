@extends('layouts.templete')
@section('title', 'Produtos')
@section('content')
<?php 
    if (!isset($id)) {
        $id = "";
    }
?>
<div class="container">

    <a href="{{route('cadastrar')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fabricante</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th>preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($carros as $carro)
                        <tr>
                            <td>{{$carro -> fabricante}}</td>
                            <td>{{$carro -> modelo}}</td>
                            <td>{{$carro -> cor}}</td>
                            <td>{{$carro -> preco}}</td>
                            <td class="text-center">
                                <a title="Editar Produto" href="{{route('edit', $carro)}}">
                                    <i class="fas fa-edit text-info mr-2"></i>
                                </a>
                                <a title="Apagar Produto" href="{{route('deleteItem', $carro)}}"> 
                                    <i class="fas fa-trash text-danger mr-2"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- {{$carros->links()}} -->

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Deseja excluir o registro ?</h2>
        @foreach($carros as $carro)
            <?php 
                if ($carro->id == $id) {
                    echo "<p>Fabricante: {$carro->fabricante}</p>";
                    echo "<p>Macar: {$carro->marca}</p>";
                    echo "<p>Cor: {$carro->cor}</p>";
                    echo "<p>Preço R$ {$carro->preco}</p>";
                }
            ?>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <form method="POST" action="{{route('deletar', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Sim</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
    if(@$id != ""){
    echo "<script>$('#exampleModal').modal('show');</script>";
    }
?>
@endsection