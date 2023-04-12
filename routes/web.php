<?php

use App\Http\Controllers\AutenticadoController;
use App\Http\Controllers\BuscarController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EscritorioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VisitanteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/buscar', BuscarController::class)->name('buscar.index');
Route::get('/escritorio', EscritorioController::class)->name('escritorio.index');
Route::resource('citas', CitaController::class);
Route::resource('cuenta', AutenticadoController::class)->except(['create','store','destroy']);
Route::resource('departamentos', DepartamentoController::class);
Route::resource('eventos', EventoController::class);
Route::resource('miembros', MiembroController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('visitantes', VisitanteController::class);
