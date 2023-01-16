<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromoController extends Controller
{
    public function create(){
        return view('Palindromo');
    }

    public function index(Request $request){
        $palabra = $request->palabra;
        $palindromo=strrev($palabra);
        if ($palabra==$palindromo) {
            $respuesta="Palíndroma";
        }else {
            $respuesta="No Palíndroma";
        }
        return view('Palindromo', compact('respuesta'));

    }//Cierre de la Funcion.
}


