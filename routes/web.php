<?php

use App\Http\Controllers\RecursividadController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('recursividad', function(){
    return view('recursividad');
});

Route::get('/recursividad', "RecursividadController@create");
Route::post('/recursividad', "RecursividadController@index")->name('resultado');

