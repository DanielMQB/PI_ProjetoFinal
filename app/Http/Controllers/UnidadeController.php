<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\UnidadeConservacao;

class UnidadeController extends Controller
{
    public function index(){
        $unidades = UnidadeConservacao::all();
        return view ('unidades.index',compact('unidades'));
    }
}
