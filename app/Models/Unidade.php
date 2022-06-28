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
        return $this->hasMany(Atrativo::class);
    }

    public function dias()
    {
        return $this->belongsToMany(Dias::class,"unidades_dias","unidade_id","dia_id");
    }

    public function ingresso()
    {
        return $this->hasOne(Ingresso::class);
    }
}
