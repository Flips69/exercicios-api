<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUm::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificarNumero']);

Route::post('exercicio/tres',
[ExercicioTresController::class, 'media']);

Route::post('exercicio/cinco',
[ExercicioCincoController::class, 'verificar']);
