<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function create(){
        return view('factorial');
    }

    public function index(Request $request){
        //>Acá esta el Factorial.
        $numero = $request->numero;
        $factorial = 1;

        for( $i=1; $i<=$numero; $i++){
            $factorial = $factorial*$i;
        }

        //>Acá esta la suma del resultado del Factorial.

        $arreglo=str_split($factorial);
        // Cantidad de indices
        $numIndices=count($arreglo);

         $suma = array_sum($arreglo);


        return view('factorial', compact('factorial','suma'));
    }
}

