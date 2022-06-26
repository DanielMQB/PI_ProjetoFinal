<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAtrativo;
use App\Models\Atrativo;

class AtrativoController extends Controller
{
    /**
     * Display a indexing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atrativos = Atrativo::all();
        return view('atrativos.index', compact('atrativos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atrativos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateAtrativo  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAtrativo $request)
    {
        Atrativo::create($request->all());
        return redirect()
            ->route('atrativos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atrativo  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function show(Atrativo $atrativo)
    {
        return view('atrativos.show', compact('atrativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atrativo  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function edit(Atrativo $atrativo)
    {
        $atrativo = atrativo::find($atrativo->id);
        if (!$atrativo) {
            return redirect()
                ->route('atrativos.index')
                ->with('message', 'Atrativo não encontrado');
        }
        return view('atrativos.edit', compact('atrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateAtrativo  $request
     * @param  \App\Models\Atrativo  $atrativo
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAtrativo $request, Atrativo $atrativo)
    {
        $atrativo->update($request->all());
        return redirect()
            ->route('atrativos.index')
            ->with('message', 'Atrativo editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atrativo  $ingresso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atrativo $atrativo)
    {
        $atrativo->delete();
        return redirect()
            ->route('atrativos.index')
            ->with('message', 'Atrativo foi deletado');
    }
}
