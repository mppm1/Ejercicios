<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibonacci</title>
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
        font-size: 80px;
        font-family: 'Lobster', cursive;
        position: relative;top: 10px; left: 300px;
            }

    .requerido{
        font-size: 30px;
        position: relative; left: 250px;top: 150px;
            }
    .requerido .numero{
        border-radius: 20px;
        width:200px;
        height:30px;
    }

    .boton{
        position: relative;left: 250px; top:160px;
        border-radius: 20px;
        width: 150px;
        height: 35px;
        cursor: pointer;
        background: #F7baba;
        font-size: 22px;
        font-family: 'Lobster', cursive;
     }

     .todo{
        display:flex;
     }

     .imagen{
        position: relative;left: 300px;top: 50px;
     }

     #resultado{
        font-size: 30px;
        position: relative; left:420px;top:500px;
        position: fixed;
     }
</style>
<body>
    <h1>Serie de Fibonacci</h1>
<div class="todo">
    <form action="{{route('resultado')}}" method="post">
        @csrf
        <div class="requerido">
            <label for="">Ingresa la cantidad de resultados que deseas ver</label><br>
            <input type="number" class="numero" name="numero" id="numero" required>
        </div>
        <button type="submit" class="boton">Calcular</button><br>

         <div class="resultado">
        @if (isset($resultado))
        <label id="resultado">Resultado: {{$resultado}}</label>
        @endif
            </div>

    </form>
    <div class="imagen"><img src="{{asset("storage/img/imagen.png")}}"alt=""></div>
</div>
</body>
</html>
