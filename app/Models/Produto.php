<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nomeproduto','valor','contato_id'];



    public function getValorAttribute()
    {
        return $this->attributes['valor'] /100;
    }

    public function setValorAttribute($attr)
    {
        return $this->attributes['valor'] = $attr * 100;
    }    
    public function contato()
    {
        return $this->belongsTo(Contato::class);
    }
}
