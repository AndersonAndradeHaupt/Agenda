<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Produto;

class ProdutoController extends Controller
{
    private $contato;

    public function __construct(produto $produto)
    {
        $this->produto = $produto->all();
    }


    public function index( Produto $produto )
    {
        return $produto->all();
    }
    public function GetProduto( Produto $produto )
    {
        $dados =  $produto->all();

        return view('Produto',['dados'=>$dados]);
    }


    public function AdicionarProd(Request $request)
    {  
        $dados = $request->all();
        return   View('AdicionarProd',['dados'=>$dados]);
    }


    public function store(Request $request)
    {
        return   $this->produto->create($request->all());
    }
   
    public function CriaProduto(Request $request)
    {
       $produto = new  produto;
       $produto = $produto->create($request->all());
       return view('AdicionarProd');
    }

    public function GetProdContatoId( $id)
    {
      $dados = produto::where('contato_id' , $id)->get();
      
      return view('Produto',['dados'=>$dados]);
    }


    public function show(Produto $produto)
    {
       return $produto;
    }

    public function Edit($id){
        $produto = produto::findOrFail($id);
        return view('AdicionarProd',['produto'=>$produto]);
    }

    public function Alterar($id,Request $request){
        $produto = produto::findOrFail($id);
        $produto->update($request->all());
        $produtos = produto::where('contato_id' , $request->contato_id)->get();
        return view('Produto',['dados'=>$produtos]);
    }

    public function Delete ($id){
        $produto = produto::findOrFail($id);
        $contato_id = $produto->contato_id;
        $produto->delete();  
        $produtos = produto::where('contato_id' , $contato_id)->get();
        return view('Produto',['dados'=>$produtos]); 
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
