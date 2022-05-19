@extends('layouts.main')

@section('title', 'Adicionar Produto')

@section('content')

<h1>Adicionar Produtos</h1>
  <div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Request::is('*/edit'))          
                <form  action="{{url('/produto/alterar')}}/{{$produto->id}}" method="post" >
                @csrf
                    <div class="mb-3">
                        <label for="nomeproduto" class="form-label">Nome Produto</label>
                        <input type="text" class="form-control" name="nomeproduto" id="nomeproduto" value="{{$produto->nomeproduto}}">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="{{$produto->valor}}">
                    </div>
                    <div class="mb-3">
                        <label for="contato_id" class="form-label">Id Contato</label>
                        <input type="text" class="form-control" id="contato_id" name="contato_id" value="{{$produto->contato_id}}">
                    </div >

                    <div class="d-grid gap-2 d-md-block">            
                        <button display: inline-block type="submit" class="btn btn btn-dark">Gravar</button> 
                    </div>      
                </form>

            @else           
                <form  action="{{url('/NovoProduto')}}" method="post" >
                @csrf
                    <div class="mb-3">
                        <label for="nomeproduto" class="form-label">Nome Produto</label>
                        <input type="text" class="form-control" name="nomeproduto" id="nomeproduto">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor">
                    </div>
                    <div class="mb-3">
                        <label for="contato_id" class="form-label">Id Contato</label>
                        <input type="text" class="form-control" id="contato_id" name="contato_id">
                    </div >

                    <div class="d-grid gap-2 d-md-block">            
                        <button display: inline-block type="submit" class="btn btn btn-dark">Gravar</button> 
                    </div>      
                </form>
             @endif
                <br>

                <div class="d-grid gap-2 d-md-block">  
                    <a href="/">
                        <button class="btn btn-dark"  display: inline-block>Voltar</button>
                    </a>
                </div>
        </div>
      </div>
  </div>

@endsection