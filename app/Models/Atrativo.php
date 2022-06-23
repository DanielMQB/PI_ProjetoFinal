<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atrativo extends Model
{
    use HasFactory;
    protected $fillable = ['nome','descricao','duracao','tipo','capacidade','observacoes','unidade_id'];

    public function unidades()
    {
        return $this->belongsTo(Unidade::class);
    }
}
