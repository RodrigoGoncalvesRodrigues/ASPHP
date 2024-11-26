<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'Descricao',
        'preco',
        'descricao_id'
    ];
    public function categoria()
    {
        return $this->belongsTo( Categoria::class);
    }
}
