<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//--------------------------INDEX----------------------
Route::get('/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index');

//--------------------SHOW---------------
Route::get ('/usuarios/{id}',[UsuarioController::class, 'show'])->name('usuario.show');

//----------------------DESTROYYY--------------------
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

//-------------------------EDIT-------------------------------------------

Route::get('/usuarios/edit/{id}',[UsuarioController::class, 'edit'])-> name('usuarios.edit');

//------------------------UPDATE --------------------------
Route::put('/usuarios/{id}',[UsuarioController::class, 'update'])->name('usuarios.update');

require __DIR__.'/auth.php';
