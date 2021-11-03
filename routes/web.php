<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RedessocialesController;
use App\Http\Controllers\EventController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/formulario', [FormularioController::class,'index'])->name('formulario');

Route::get('/sociales', [RedessocialesController::class,'index'])->name('sociales');

Route::get('/eventos', [EventController::class,'index'])->name('eventos');

Route::get('/crear-evento', [EventController::class,'create'])->name('creareventos');



// Route::get('/eventos/get', [EventController::class, 'getEventos'])->middleware(['auth'])->name('eventos.getIndividual');
// Route::get('/eventos/get-all', [EventController::class, 'getEventos'])->middleware(['auth'])->name('eventos.get');
// Route::get('/eventos/delete/{id}', [EventController::class, 'delete'])->middleware(['auth'])->name('eventos.delete');
// Route::resource('eventos', EventController::class)->middleware(['auth'])->names('eventos')->except(['destroy']);


Route::get('/formulario',[formController::class,'formulario'])->name('formulario');
Route::get('/registrado',[formController::class,'registrado'])->name('registrado');
Route::get('/indexprincipal',[formController::class,'indexprincipal'])->name('indexprincipal');
Route::post('/guardarUsuario',[formController::class,'guardarUsuario'])->name('guardarUsuario');
//RUTAS PARA LAS TABLAS//
Route::get('/tablaprincipal',[formController::class,'tablaprincipal'])->name('tablaprincipal'); // Tu funcion esta en formController y tu la estabas poniendo en usertableController, por eso nunca te la detectada la vista
//RUTAS
