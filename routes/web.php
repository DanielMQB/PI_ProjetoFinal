<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngressoController;

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

require __DIR__ . '/auth.php';

Route::get('/ingressos/{id}', [IngressoController::class, 'show'])->name('ingressos.show');
Route::delete('/ingressos/{id}', [IngressoController::class, 'destroy'])->name('ingressos.destroy');
Route::resource('/ingressos', IngressoController::class);
