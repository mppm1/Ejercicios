<?php

use App\Models\Fibonacci;
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

Route::get('/fibonacci', function(){
    return view('fibonacci');
});

Route::get('/fibonacci', "FibonacciController@create");
Route::post('/fibonacci', "FibonacciController@index")->name('resultado');
