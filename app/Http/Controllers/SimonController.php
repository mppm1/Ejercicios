<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SimonController extends Controller
{
    public function create(){
        return view('SimonDice');
    }

    public function mostrarSecuencia(){
        $colores = array("Rojo", "Azul", "Amarillo", "Verde");
        $color_random = $colores[rand(0,3)];

            for ($i = 0; $i < 1; $i++) {
                $color_random = $colores[rand(0,3)];
                echo $color_random . "<br>";
            }

        return view('SimonDice');
    }

}
