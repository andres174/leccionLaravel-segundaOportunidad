<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Reportes;

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

Route::get('datos-personales-pacientes',[Reportes::class,'datosPersonalesP']);

Route::get('datos-personales-medicos',[Reportes::class,'datosPersonalesM']);

Route::get('consultaSintoma{sintoma}',[Reportes::class,'consultaSintoma']);

Route::get('consultaPaciente{cedula}',[Reportes::class,'consultaPaciente']);
