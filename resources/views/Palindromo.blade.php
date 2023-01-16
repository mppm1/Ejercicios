<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindromo</title>
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
        position: absolute;
        position: relative;left: 550px;
            }

    .todo{
        display: flex;
        position: relative; top: 250px;left:480px;
        position: fixed;
    }

    .imagen{
        position: relative;bottom:180px;right:200px;
        position: fixed;
}

    .informacion{
        font-size: 30px;
        position: relative; right:100px;top:80px;
    }

    .informacion .palabra{
        border-radius: 20px;
        width:200px;
        height:30px;
    }

    .boton{
        position: relative;right:10px; top:10px;
        border-radius: 20px;
        width: 150px;
        height: 35px;
        cursor: pointer;
        background: #48adf0;
        font-size: 22px;
        font-family: 'Lobster', cursive;
    }

    .respuesta{
        position: relative;left:350px; top:530px;
        font-size: 30px;
        font-family: 'Lobster', cursive;
        position: fixed;
    }

</style>

<body>
    <h1>Palabras Palíndromas</h1>

    <div class="todo">
        <div class="informacion">
            <form action="{{route('resultado')}}" method="POST">
                @csrf

                <label for="">Ingresa una palabra </label><br><br>
                <input type="text" class="palabra" name="palabra"><br><br>
                <button type="submit" class="boton">Calcular</button><br>
            </div>
            <div class="respuesta">
            @isset($respuesta)
            <label id="resultado">Su palabra es: {{$respuesta}}</label>
            @endisset
            </div>
        </form>

 <div class="imagen">
            <img src="{{asset("storage/img/imagen3.png")}}" alt="">
        </div>

    </div>
</body>
</html>
