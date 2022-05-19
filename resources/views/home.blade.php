@extends('layouts.main')

@section('title', 'Agenda Contato Produtos')

@section('content')

<h1>Agenda de Contato / Produto</h1>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form >
            @csrf
              <table class="table table-dark table-striped">
                <tr>
                        <th >ID</th>
                        <th >Nome</th>
                        <th >Valor</th>
                        <th >Editar</th>
                        <th >Deletar</th>
                </tr>

                    @foreach($dados as $valor => $value)
                    <tr onclick="location.href ='/produtos/{{$value->id}}'">
                            <td>{{$value->id}}</th>
                            <td>{{$value->nome}}</td>
                            <td>{{$value->telefone}}</td>
                            <td nowrap>
                                <a href="/AlteraContato/{{$value->id}}/edit"  class="btn btn-info">Editar</a>
                            </td>
                            <td>
                            <form action="/contatos/delete/{{$value->id}}" method="post">
                                @csrf 
                                @method('delete') 
                                    <button class="btn btn-danger">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

               </table>
               
            </form>

            <div class="d-grid gap-2 d-md-block">
                <a href="/NovoContato/">
                    <button class="btn btn btn-dark" type="button"  >Novo Contato</button>
                </a>
            </div>
        </div>
      </div>
  </div>

@endsection
