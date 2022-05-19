@extends('layouts.main')

@section('title', 'Adicionar Contato')

@section('content')

<h1>Adicionar Contato</h1>
  <div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Request::is('*/edit')) 
            <form  action="{{url('/contato/alterar')}}/{{$contato->id}}" method="post" >
                @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Contato</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$contato->nome}}">
                    </div>
                    <div class="mb-3">
                        <label for="empresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" value="{{$contato->empresa}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="{{$contato->telefone}}">
                    </div >
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="{{$contato->endereco}}">
                    </div >
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$contato->email}}">
                    </div >
    
                    <div class="d-grid gap-2 d-md-block">            
                        <button display: inline-block type="submit" class="btn btn btn-dark">Gravar</button> 
                    </div>      
                </form>
            
            @else
                <form  action="{{url('/NovoContato')}}" method="post" >
                @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Contato</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="mb-3">
                        <label for="empresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div >
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div >
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email">
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