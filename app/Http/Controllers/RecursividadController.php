<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursividadController extends Controller
{
    public function create(){
        return view('recursividad');
    }

    public function index(Request $request){
        $numero = $request->numero;
        $resultado=$this->factorial($numero);
        return view('recursividad', ['resultado' => $resultado]);
    }

    public function factorial($numero){
        //Operador Ternario
        return $numero>0 ? $numero*$this->factorial($numero-1) : $resultado = 1;
    }
}
