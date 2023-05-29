<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function create(){
        return view('fibonacci');
    }

    // public function index(Request $request){
    //     $numero = $request->numero;
    //     $resultado=[$this->resultado($numero)];
    //     $resultado = implode(" , ",$resultado);
    //     return view (('fibonacci'), compact('resultado'));
    // }

    // public function fibonacci($numero){
    //         if (($numero==0) or ($numero==1)) {
    //             return $numero;
    //         }else{
    //             return $this->fibonacci($numero -1) + $this->fibonacci($numero -2);
    //         }
    //         }
    //         public function resultado($numero){
    //             for ($i=0; $i < $numero ; $i++) {
    //                 echo $this->fibonacci($i);
    //     }
    //  }
    // }

    //SIN RECURSIVIDAD

    public function index(Request $request){
        $numero = $request->numero;
        $num1 = 0;
        $num2 = 1;
        $num3 = null;
        $resultado=[];
        for ($i=0; $i < $numero ; $i++){
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
