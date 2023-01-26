<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/SimonDice', function(){
    return view('SimonDice');
});

Route::get('/SimonDice/secuencia', 'SimonController@mostrarSecuencia')->name('secuencia');

