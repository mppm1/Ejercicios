<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejercicios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                position: fixed;
            }
            h1{
             text-align:center;
                font-size: 80px;
                position: relative;top: 10px; left:250px;
                font-family: 'Lobster', cursive;
            }
            .todo{
                display: flex;
            }
            .imagen{
                position: relative;padding-top:40px;
                position: relative;padding-left: 350px;
                border-radius: 25px;
            }
            .opciones > a{
                color: #Fa9B9B;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-color: #fa9b9b;
                border-width: 2px;
                border-style: solid;
                border-radius: 10px;
                display:block;
                position:relative;left:100px;top:200px;
                cursor: pointer;
            }
            .opciones > a:hover{
                background:#Fa9B9B;
                color: #ffffff;
                -webkit-transition: background-color 2s ease-out;
                -moz-transition: background-color 2s ease-out;
                -o-transition: background-color 2s ease-out;
                transition: background-color 2s ease-out;
            }
        </style>
    </head>

    <body>
        <h1>Ejercicios de Algoritmia</h1>
<div class="todo">
        <div class="imagen"><img src="{{asset("storage/img/inicio.jpg")}}" alt=""></div>

        <div class="opciones">
            <a href="fibonacci">Serie de Fibonacci</a><br>
            <a href="factorial">Factoriales</a><br>
            <a href="">Palindromos</a><br>
            <a href="">Factorial(Recursividad)</a>
        </div>
</div>
    </body>
</html>
