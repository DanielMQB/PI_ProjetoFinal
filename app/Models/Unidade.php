<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome','quantidade','valorIngresso','descricao','endereco'];

    public function atrativo()
    {
        return $this->belongsTo(Atrativo::class);
    }
}
