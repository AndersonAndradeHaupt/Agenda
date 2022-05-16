<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome','telefone','empresa','email','endereco'];

    public function produtos()
    {

      return $this->hasMany(Produto::class);

    }
}

