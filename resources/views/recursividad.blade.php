<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recursividad</title>
</head>
<style>
    h1{
        text-align:center;
        font-size: 60px;
        font-family: 'Lobster', cursive;
        }

    .todo{
        display: flex;
    }

    .imagen{
        position: relative;left:350px;top:50px;
    }

      .informacion{
        font-size: 30px;
        position: relative; right:480px;bottom:400px;
        position: fixed;
            }
    .informacion .numero{
        border-radius: 20px;
        width:200px;
        height:30px;
    }
    .boton{
        position: relative;left:470px; top:280px;
        border-radius: 20px;
        width: 150px;
        height: 35px;
        cursor: pointer;
        background: #F7baba;
        font-size: 22px;
        font-family: 'Lobster', cursive;
     }
     #resultado{
        font-size: 30px;
        position: relative; left:1000px;top:530px;
        position: fixed;
     }

</style>

<body>
<h1>Factorial con recursividad</h1>
<div class="todo">
    <div class="imagen"><img src="{{asset("storage/img/imagen4.png")}}" alt=""></div>
        <div class="informacion">
            <form action="{{route('resultado')}}" method="POST">
            @csrf
            <label for="">Ingresa un número </label><br>
                <input type="number" class="numero" name="numero" id="numero"><br><br><br>
        </div>
                <button type="submit" class="boton">Calcular</button><br>

                @if (isset($resultado))
             <label id="resultado">El factorial es: {{$resultado}}</label>
             @endif
        </form>
    </div>
</div>
</body>
</html>
