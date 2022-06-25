<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dias extends Model
{
    use HasFactory;
    protected $fillable = ['dia'];

    public function unidades()
    {
        return $this->belongsToMany(Unidade::class);
    }
}
