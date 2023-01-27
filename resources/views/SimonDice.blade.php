<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simón Dice</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<style>
    body{
        text-align: center;
    }
    h1{
        color: #363636;
        font-family: Quicksand;
        font-size: 50px;
    }
    .Boton{
        font-family: Quicksand;
        font-size: 22px;
        width: 100px;
        height: 50px;
        border-radius: 20px;
        position: relative;bottom:20px;
        background: #2aebbadc;
        border-color: #13b3e4;
        border-width: 3px;
        cursor: pointer;
    }
   .todo #botones button{
       cursor: pointer;
        width: 300px;
        height: 300px;
        margin: 15px;
        border-radius: 20px;
        border-color: rgb(255, 255, 255);
        border-width: 3px;
        position: relative;right:450px;
    }
    .Rojo{
        background-color: rgba(240, 28, 28, 0.925);
    } button:active .Rojo{
        box-shadow:0px 0px 80px rgba(240, , 28, 0.925);
    }
    .Azul{
        background-color: rgb(0, 217, 255);
    }button:active .Azul{
        box-shadow:0px 0px 80px rgb(0, 217, 255);
    }
    .Amarillo{
        background-color: rgb(255, 255, 1);
    }button:active .Amarillo{
        box-shadow:0px 0px 80px rgb(255, 255, 1);
    }
    .Verde{
        background-color: rgb(3, 250, 3);
    }button:active .Verde{
        box-shadow:0px 0px 80px rgb(3, 250, 3);}
    .todo{
        padding-left: 200px;
    }
    .imagen{
        padding-bottom:40px;
        padding-left: 710px;
        position: relative;bottom:650px;
    }
</style>

<body>
    <h1 id="titulo">Juego Simón Dice</h1>
    <button class="Boton">Iniciar</button>

<div class="todo">

        <div id="botones">
            <button class="Rojo"></button>
            <button class="Azul"></button>
            <br><br>
            <button class="Amarillo"></button>
            <button class="Verde"></button>
        </div>

    <div class="imagen">
        <img src="{{asset("storage/img/imagen5.png")}}"alt="">
    </div>

</div>

<script>
    // var botones = document.querySelectorAll("#botones button");
    // for (var i = 0; i < botones.length; i++) {
    // botones[i].addEventListener("click", function()) {
    //     }
    // }
</script>
</body>
</html>
