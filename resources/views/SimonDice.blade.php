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

    button{
        width: 300px;
        height: 300px;
        margin: 15px;
        border-radius: 20px;
        border-color: rgb(255, 255, 255);
        border-width: 3px;
        cursor: pointer;
    }

    button:hover{
        width: 305px;
        height: 305px;
        border-color:#000000;
    }

    #Rojo{
        background-color: rgba(240, 28, 28, 0.925);
    }

    #Azul{
        background-color: rgb(0, 217, 255);
    }

    #Amarillo{
        background-color: rgb(255, 255, 1);
    }

    #Verde{
        background-color: rgb(3, 250, 3);
    }

    .todo{
        display: flex;
        padding-left: 200px;
    }

    .imagen{
        padding-top: 30px;
        padding-left: 30px;
    }

    .juego{
        padding-right: 30px;
    }
</style>

<body>
    <h1 id="titulo">Presiona una tecla para empezar</h1>

<div class="todo">

    <div class="juego">
    <button id="Rojo" class="active"></button>
    <button id="Azul" class="active"></button>
    <br><br>
    <button id="Amarillo" class="active"></button>
    <button id="Verde" class="active"></button>
    </div>

    <div class="imagen">
        <img src="{{asset("storage/img/imagen5.png")}}"alt="">
    </div>

</div>

</body>
</html>
