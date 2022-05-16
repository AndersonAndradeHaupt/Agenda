<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    private $contato;

    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function index()
    {
        return $this->contato->all();
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
