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
        return view('Palindromo',['palabra'=>$palabra],['palabra1'=>$palindromo]);

    }//Cierre de la Funcion.
}


