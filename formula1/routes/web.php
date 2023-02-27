<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('escuderias',App\Http\Controllers\EscuderiaController::class)->middleware('auth');
Route::resource('pilotos',App\Http\Controllers\PilotoController::class)->middleware('auth');
Route::resource('circuitos',App\Http\Controllers\CircuitoController::class)->middleware('auth');
Route::resource('resultados',App\Http\Controllers\ResultadoController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
Route::get('/editarPiloto/{id}', [App\Http\Controllers\PilotoController::class, 'editarPiloto'])->name('editarPiloto');
Route::get('/editarCircuito/{id}', [App\Http\Controllers\CircuitoController::class, 'editarCircuito'])->name('editarCircuito');
Route::get('/editarEscuderia/{id}', [App\Http\Controllers\EscuderiaController::class, 'editarEscuderia'])->name('editarEscuderia');
Route::get('/editarResultado/{id}', [App\Http\Controllers\ResultadoController::class, 'editarResultado'])->name('editarResultado');

Route::get('/eliminarPiloto/{id}', [App\Http\Controllers\PilotoController::class, 'eliminarPiloto'])->name('eliminarPiloto');
Route::get('/eliminarCircuito/{id}', [App\Http\Controllers\CircuitoController::class, 'eliminarCircuito'])->name('eliminarCircuito');
Route::get('/eliminarEscuderia/{id}', [App\Http\Controllers\EscuderiaController::class, 'eliminarEscuderia'])->name('eliminarEscuderia');
Route::get('/eliminarResultado/{id}', [App\Http\Controllers\ResultadoController::class, 'eliminarResultado'])->name('eliminarResultado');

Route::get('/agregarPiloto', [App\Http\Controllers\PilotoController::class, 'agregarPiloto'])->name('agregarPiloto');
Route::get('/agregarCircuito', [App\Http\Controllers\CircuitoController::class, 'agregarCircuito'])->name('agregarCircuito');
Route::get('/agregarEscuderia', [App\Http\Controllers\EscuderiaController::class, 'agregarEscuderia'])->name('agregarEscuderia');
Route::get('/agregarResultado', [App\Http\Controllers\ResultadoController::class, 'agregarResultado'])->name('agregarResultado');*/

