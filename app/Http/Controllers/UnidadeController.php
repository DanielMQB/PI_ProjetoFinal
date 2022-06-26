<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Http\Requests\StoreUpdateUnidade;

class UnidadeController extends Controller
{
    public function index() {
        $unidades = Unidade::all();
        return view('unidades.index', compact('unidades'));
    }

    public function create(Unidade $unidade) {
        return view('unidades.create');
    }

    public function store(StoreUpdateUnidade $request) {
        Unidade::create($request->all());
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
        $unidade->delete();
        return redirect()
            ->route('unidades.index')
            ->with('message', 'Unidade foi deletada');
    }
}
