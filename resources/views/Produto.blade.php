@extends('layouts.main')

@section('title', 'Agenda Contato Produtos')

@section('content')

<h1>Lista de Produtos</h1>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form >
            @csrf
                <table class="table table-dark table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th >Editar</th>
                        <th >Deletar</th>
                    </tr>

                    @foreach($dados as $valor => $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->nomeproduto}}</td>
                            <td>{{$value->valor}}</td>
                            <td nowrap>
                                <a href="/AlteraProd/{{$value->id}}/edit"  class="btn btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="/produtos/delete/{{$value->id}}" method="post">
                                @csrf 
                                @method('delete') 
                                    <button class="btn btn-danger">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                
                </table>              
            </form>
            <a href="/NovoProduto">
                    <button class="btn btn btn-dark" type="button">Novo Produto</button>
            </a>

            <br>
            <br>

            <div class="d-grid gap-2 d-md-block">
                <a href="/">
                    <button id="btnvoltar" class="btn btn btn-dark" type="button" >Voltar</button>
                </a>
            </div>

        </div>
      </div>
  </div>

@endsection