<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    use HasFactory;
    protected $fillable = ['tipoIngresso','data','nomeComprador','status','quantidade','unidade_id','user_id'];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function atrativos()
    {
        return $this->belongsToMany(Atrativo::class,"atrativos_ingressos","ingresso_id","atrativo_id");
    }
}
