<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Request\StoreUpdateUser;
use App\Http\Requests\StoreUpdateUser as RequestsStoreUpdateUser;

class UsuarioController extends Controller
{
   public function index(){
    $usuarios=  User::all();
    return view('usuarios.index', compact('usuarios'));
   }
   public function show($id){
    $usuario= User::find($id);
    if(!$usuario){
        return redirect()
            ->route('usuarios.index')
            ->with('message','Usuario não foi Encontrado!!!!!!!!!!!!!');

    }
    return view('usuarios.show',compact('usuario'));
   }

   public function destroy($id){
    $usuario= User::find($id);
    if(!$usuario){
        return redirect()
                    ->route('usuarios.index')
                    ->with('message','Usuario Não foi Encontrado');
    }
    $usuario ->delete();
    return redirect()
                ->route('usuarios.index')
                ->with('message', 'Usuario também não foi encontrado Aqui');

   }

   public function edit($id){
    $usuario= User::find($id);
    if(!$usuario){
        return redirect()
                ->route('usuarios.index')
                ->with('message','Usuario Não foi Encontrado');
            }
            return view('usuarios.edit',compact('usuario'));

   }


   public function update(RequestsStoreUpdateUser $request, $id){
        $usuario= User::find($id);
            if(!$usuario){
                return redirect()
                            ->route('usuarios.index')
                            ->with('message','Usuario Não foi Encontrado');
            }
            $usuario->update($request->all());

            return redirect()
                            ->route('usuarios.index')
                            ->with('message','Usuario foi Alterado');

    }
}
