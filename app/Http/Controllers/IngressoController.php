<?php

namespace App\Http\Controllers;

use App\Models\Ingresso;
use App\Http\Requests\StoreIngressoRequest;
use App\Http\Requests\UpdateIngressoRequest;

class IngressoController extends Controller
{
    /**
     * Display a indexing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingressos = Ingresso::all();
        return view('ingressos.index', compact('ingressos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Ingresso $ingresso)
    {
        $ingresso->status == true;
        return view('ingressos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngressoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngressoRequest $request)
    {
        Ingresso::create($request->all());
        return redirect()
            ->route('ingressos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingresso $ingresso)
    {
        return view('ingressos.show', compact('ingresso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingresso $ingresso)
    {
        $ingresso = Ingresso::find($ingresso->id);
        if (!$ingresso) {
            return redirect()
                ->route('ingressos.index')
                ->with('message', 'Ingresso não encontrado');
        }
        return view('ingressos.edit', compact('ingresso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngressoRequest  $request
     * @param  \App\Models\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngressoRequest $request, Ingresso $ingresso)
    {
        $ingresso->update($request->all());
        return redirect()
            ->route('ingressos.index')
            ->with('message', 'Ingresso editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingresso  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingresso $ingresso)
    {
        $ingresso->delete();
        return redirect()
            ->route('ingressos.index')
            ->with('message', 'Ingresso foi deletado');
    }
}
