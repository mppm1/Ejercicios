<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<style>
body{
    text-align: center
}

h1{
    font-family: 'Quicksand', sans-serif;
    font-size: 52px;
}

.todo{
    display: flex;
    padding-left:200px;
}

.calculadora{
    width:500px;
    height:550px;
    overflow: hidden;
    position: relative; left:100px;top:40px;
    background: #BFF2EB;
    border-radius:15px;
    }

#resultado{
    font-family: 'Quicksand', sans-serif;
    font-size: 30px;
    border-radius:15px;
    width:400px;
    padding-bottom:10px;
    position: relative;top: 30px;
    border-width:3px;
    border-color: #4585da;
}

.numeros{
    position: relative;top: 30px;
    display: flex;
    justify-content: center;
    text-align: center;
    gap:12px;
    font-size: 22px;
    font-family: 'Quicksand', sans-serif;
}

.numeros2{
    position: relative;top: 30px;
    display: flex;
    justify-content: center;
    align-items:center;
    gap:8px;
    font-size: 22px;
    font-family: 'Quicksand', sans-serif;
}

.s-button{
    width:80px;
    height:70px;
    background: #1BE3B0;
    border-radius: 50%;
    font-size: 22px;
    border: 0;
    cursor: pointer;
    font-family: 'Quicksand', sans-serif;
}

.s-button:hover{
    width:80px;
    height:70px;
    background: white;
    color:#1BE3B0;
    border-radius: 50%;
    font-size: 22px;
    border: 0;
    cursor: pointer;
    font-family: 'Quicksand', sans-serif;
}

.s-button2{
    width:80px;
    height:70px;
    background:white;
    border-radius: 50%;
    font-size: 22px;
    border: 0;
    cursor: pointer;
    font-family: 'Quicksand', sans-serif;
}

.s-button2:hover{
    background:#1BE3B0;
    color:white;
}

</style>

<body>
    <h1>Calculadora</h1>

<div class="todo">

    <div class="imagen"> <img src="{{asset("storage/img/imagen6.png")}}"alt=""></div>

        <div class="calculadora">
        <div>
        <input type="text" id="resultado" placeholder="0">
        </div><br>

        <div class="numeros">
            <button class="s-button" onclick="numeros(7)">7</button>
            <button class="s-button" onclick="numeros(8)">8</button>
            <button class="s-button" onclick="numeros(9)">9</button>
            <button class="s-button" onclick="numeros('+')">+</button>
        </div><br>

        <div class="numeros">
            <button class="s-button" onclick="numeros(4)">4</button>
            <button class="s-button" onclick="numeros(5)">5</button>
            <button class="s-button" onclick="numeros(6)">6</button>
            <button class="s-button" onclick="numeros('-')">-</button>
        </div><br>

        <div class="numeros">
            <button class="s-button" onclick="numeros(1)">1</button>
            <button class="s-button" onclick="numeros(2)">2</button>
            <button class="s-button" onclick="numeros(3)">3</button>
            <button class="s-button" onclick="numeros('/')">/</button>
        </div><br>

        <div class="numeros">
            <button class="s-button" onclick="resetear()">C</button>
            <button class="s-button" onclick="numeros(0)">0</button>
            <button class="s-button" onclick="numeros('.')">.</button>
            <button class="s-button" onclick="numeros('*')">x</button>
        </div><br>

        <div class="numeros2">
            <button class="s-button" onclick="numeros('<')"><</button>
            <button class="s-button" onclick="numeros('>')">></button>
            <button class="s-button2" onclick="operacion()">=</button>
        </div>

    </div>

</div>
<script>

    function numeros(valor) {
        document.getElementById('resultado').value += valor;
    }

    function operacion(params) {
        var opera = document.getElementById('resultado').value;
        if (opera==0) {
            document.getElementById('resultado').value = "Sin operacion"
        }else{
            document.getElementById('resultado').value = eval(opera);
        }
    }

    function resetear(){
        document.getElementById('resultado').value = " ";
    }
</script>
</body>
</html>
