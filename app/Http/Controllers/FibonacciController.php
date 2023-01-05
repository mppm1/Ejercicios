<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function create(){
        return view('fibonacci');
    }

    public function index(Request $request){
        $numero = $request->numero;
        $num1 = 0;
        $num2 = 1;
        $num3 = null;
        $resultado=[];

        for( $i=0; $i<$numero; $i++){
            if($i==0){
                $resultado[] = $num1;
            }
            else if($i==1){
                $resultado[] = $num2;
            } else{
                $num3=$num1+$num2;
                $resultado[] = $num3;
                $num1=$num2;
                $num2=$num3;
            }
        }

        $resultado = implode(", ", $resultado);
        return view('fibonacci', compact('resultado'));
    }
}
