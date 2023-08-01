<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioUmForRequest;
use Illuminate\Http\Request;

class ExercicioUm extends Controller
{
    public function multiplicar(ExercicioUmForRequest $request){    
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;   

        return json_encode([
            'resultado' => $primeiraEntrada * $segundaEntrada
        ]); 
    }
}