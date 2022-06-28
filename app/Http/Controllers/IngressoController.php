<?php

namespace App\Http\Controllers;

use App\Models\Ingresso;
use App\Models\Unidade;
use App\Models\Atrativo;
use App\Http\Requests\StoreIngressoRequest;
use App\Http\Requests\UpdateIngressoRequest;
use Illuminate\Support\Facades\Auth;

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


     *
     *
     *
     * @return \Illuminate\Http\Response
     */

    //public function create(Ingresso $ingresso)
    //{
    //  $ingresso->status == true;
   //    return view('ingressos.create');
   // }

   public function getUnidades(){
        $unidades = Unidade::all();
        return view('ingressos.listUnidades', compact('unidades'));
   }

    public function create($unidade_id){
        $atrativos = Atrativo::where('unidade_id',$unidade_id)->get();
        //dd($unidades);
        return view('ingressos.create',compact('atrativos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngressoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngressoRequest $request)
    {
        $user = Auth::user();
        $atrativo = Atrativo::find($request->atrativos[0]);
        $request->request->add(['unidade_id' => $atrativo->unidade_id]);
        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['status'=>true]);
        $ingresso = Ingresso::create($request->all());
        $ingresso->atrativos()->attach($request->atrativos);
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
        $ingresso->atrativos()->detach();
        $ingresso->delete();
        return redirect()
            ->route('ingressos.index')
            ->with('message', 'Ingresso foi deletado');
    }
}
