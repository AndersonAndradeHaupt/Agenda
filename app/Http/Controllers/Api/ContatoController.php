<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    private $contato;


    public function AdicionaContato(Request $request)
    {  
        $dados = $request->all();
        return   View('Contato',['dados'=>$dados]);
    }

    public function CriaContato(Request $request)
    {
       $contato = new  contato;
       $contato = $contato->create($request->all());
       return view('Contato');
    }

    public function Edit($id){
        $contato = contato::findOrFail($id);
        return view('Contato',['contato'=>$contato]);
    }

    public function Alterar($id,Request $request){
        $contato = contato::findOrFail($id);
        $contato->update($request->all());
        $contatos = contato::all();
        return view('home',['dados'=>$contatos]);
    }


    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function GetContato(Contato $Contato)
    {
        $dados = $Contato->all();

        return view('home',['dados'=>$dados]);
    }

  
    public function Delete ($id){
        $contato = contato::findOrFail($id);
        $contato->delete();  
        $contatos = contato::all();
        return view('home',['dados'=>$contatos]); 
    }

    public function index(Contato $Contato)
    {
        return  $Contato->all();
    }


    public function store(Request $request)
    {
     return   $this->contato->create($request->all());
    }

    
    public function show(Contato $contato)
    {
       return $contato;
    }


    public function update(Request $request, Contato $contato)
    {
      $contato->update($request->all()) ;
      
      return $contato;
    }


    public function destroy(Contato $contato)
    {
        return $contato->delete();
    }
}
