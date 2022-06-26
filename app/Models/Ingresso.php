<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    use HasFactory;
    protected $fillable = ['tipo','data','nome','status'];

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
        return $this->belongsToMany(Atrativos::class);
    }
}
