<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\AtrativoController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    Rota de Unidades de conservação
*/

// Indice de unidades
Route::get('/unidades',[UnidadeController::class,'index'])->name('unidades.index')->middleware(['auth']);;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Rotas de usuário
//--------------------------INDEX----------------------
Route::get('/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index')->middleware(['auth']);

//--------------------SHOW---------------
Route::get ('/usuarios/{id}',[UsuarioController::class, 'show'])->name('usuarios.show')->middleware(['auth']);

//----------------------DESTROYYY--------------------
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware(['auth']);

//-------------------------EDIT-------------------------------------------

Route::get('/usuarios/edit/{id}',[UsuarioController::class, 'edit'])-> name('usuarios.edit')->middleware(['auth']);

//------------------------UPDATE --------------------------
Route::put('/usuarios/{id}',[UsuarioController::class, 'update'])->name('usuarios.update')->middleware(['auth']);
require __DIR__ . '/auth.php';


//Rotas de Ingressos
Route::resource('/ingressos', IngressoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('ingressos.index');
        })->except(['create'])->middleware(['auth']);

Route::get('/ingresso/unidades', [IngressoController::class,'getUnidades'])->middleware(['auth'])->name('ingresso.unidades');
Route::get('/ingressos/create/{unidade_id}', [IngressoController::class,'create'])->name('ingressos.create')->middleware(['auth']);

//Rotas de Atrativos
Route::resource('/atrativos', AtrativoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('atrativos.index');
        })->middleware(['auth']);

//Rotas de Unidades
Route::resource('/unidades', UnidadeController::class)
        ->missing(function (Request $request) {
            return Redirect::route('unidades.index');
        })->middleware(['auth']);
