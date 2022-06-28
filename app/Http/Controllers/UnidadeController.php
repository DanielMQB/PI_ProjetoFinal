<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Http\Requests\StoreUpdateUnidade;
use App\Models\Dias;

class UnidadeController extends Controller
{
    public function index() {
        $unidades = Unidade::all();
        return view('unidades.index', compact('unidades'));
    }

    public function create(Unidade $unidade) {
        $dias = Dias::all();
        return view('unidades.create',compact('dias'));
    }

    public function store(StoreUpdateUnidade $request) {
        $unidade = Unidade::create($request->all());
        $unidade->dias()->attach($request->atrativos);
        return redirect()
            ->route('unidades.index');
    }

    public function show(Unidade $unidade) {
        return view('unidades.show', compact('unidade'));
    }

    public function edit(Unidade $unidade) {
        $unidade = Unidade::find($unidade->id);
        if(!$unidade) {
            return redirect()
                ->route('unidades.index')
                ->with('message', 'Unidade não encontrada');
        }
        return view('unidades.edit', compact('unidade'));
    }

    public function update(StoreUpdateUnidade $request, Unidade $unidade) {
        $unidade->update($request->all());
        return redirect()
            ->route('unidades.index')
            ->with('messaage', 'Unidade editada');
    }

    public function destroy(Unidade $unidade) {
        $unidade->dias()->detach();
        $unidade->delete();
        return redirect()
            ->route('unidades.index')
            ->with('message', 'Unidade foi deletada');
    }
}
