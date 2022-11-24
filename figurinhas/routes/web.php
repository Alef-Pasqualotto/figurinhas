<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigurinhaController;
use App\Http\Controllers\PacoteController;

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

Route::get('/figurinhas', [FigurinhaController::class, 'index']);
Route::get('/figurinhas/{id}/destroy', [FigurinhaController::class, 'destroy']);
//Route::get('/pacotes', [PacoteController::class, 'criarPacote']);
Route::post('/compraPacotes', [PacoteController::class, 'criarPacote']);
Route::get('/figurinhas/{id}/edit', [FigurinhaController::class, 'edit']);
Route::get('/figurinhas/update', [FigurinhaController::class, 'update']);
Route::get('/pacotes', [PacoteController::class, 'criarPacote']);
Route::view('/teste', 'teste.index');
