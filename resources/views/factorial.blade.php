<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial</title>
</head>

<style>
html, body {
                background-color: #ffffff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align:center;
                position:fixed;
            }

    h1{
        text-align:center;
        font-size: 60px;
        font-family: 'Lobster', cursive;
        position: fixed;
        position: relative;top: 10px; left: 300px;
            }

    .todo{
        display: flex;
    }

    .informacion{
        font-size: 30px;
        position: relative; left: 500px;top: 150px;
            }
    .informacion .numero{
        border-radius: 20px;
        width:200px;
        height:30px;
    }

    .boton{
        position: relative;left: 300px; top:250px;
        border-radius: 20px;
        width: 150px;
        height: 35px;
        cursor: pointer;
        background: #F7baba;
        font-size: 22px;
        font-family: 'Lobster', cursive;
     }
     .imagen{
        position: relative;left:300px;top:30px;
        background: #F7baba;
        padding:20px;
        border-radius: 20px;
     }
     #resultado{
        font-size: 30px;
        position: relative; left: 120px;top: 300px;
     }
     #resultado1{
        font-size: 30px;
        position: relative; right:110px;top:350px;
     }

</style>

<body>
    <h1>Ejercicios Factoriales</h1>

    <div class="todo">
        <div class="imagen">
            <img src="{{asset("storage/img/imagen2.png")}}" alt="">
        </div>

        <div class="informacion">
            <form action="{{route('resultado')}}" method="POST">
                @csrf
                <label for="">Ingresa un número </label><br>
                <input type="number" class="numero" name="numero" id="numero"><br><br>
        </div>
                <button type="submit" class="boton">Calcular</button><br>

                @if (isset($factorial))
             <label id="resultado">El factorial es: {{$factorial}}</label>
             @endif

             @if (isset($suma))
             <label id="resultado1">La suma del factorial es: {{$suma}}</label>
             @endif

            </form>

    </div>
</body>
</html>
