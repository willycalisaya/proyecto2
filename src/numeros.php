<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('img2.jpg');
            background-size: cover;
        }
        #game {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
        }
        #number {
            font-size: 2em;
            color: green;
        }
        #input {
            font-size: 1.2em;
            width: 200px;
        }
        #message {
            font-size: 1.2em;
            color: red;
        }
    </style>
</head>
<body>

<div id="game">
    <h1>Juego de números en inglés</h1>

    <p>Escribe este número en inglés:</p>
    <div id="number"></div>
    <input id="input" type="text" oninput="checkNumber()">
    <button onclick="nextNumber()">Siguiente número</button>

    <p id="message"></p>
    <p id="score">Puntuación: 0</p>
</div>

<script>
    var numbersInEnglish = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty', 'twenty-one', 'twenty-two', 'twenty-three', 'twenty-four', 'twenty-five', 'twenty-six', 'twenty-seven', 'twenty-eight', 'twenty-nine', 'thirty', 'thirty-one', 'thirty-two', 'thirty-three', 'thirty-four', 'thirty-five', 'thirty-six', 'thirty-seven', 'thirty-eight', 'thirty-nine', 'forty', 'forty-one', 'forty-two', 'forty-three', 'forty-four', 'forty-five', 'forty-six', 'forty-seven', 'forty-eight', 'forty-nine', 'fifty', 'fifty-one', 'fifty-two', 'fifty-three', 'fifty-four', 'fifty-five', 'fifty-six', 'fifty-seven', 'fifty-eight', 'fifty-nine', 'sixty', 'sixty-one', 'sixty-two', 'sixty-three', 'sixty-four', 'sixty-five', 'sixty-six', 'sixty-seven', 'sixty-eight', 'sixty-nine', 'seventy', 'seventy-one', 'seventy-two', 'seventy-three', 'seventy-four', 'seventy-five', 'seventy-six', 'seventy-seven', 'seventy-eight', 'seventy-nine', 'eighty', 'eighty-one', 'eighty-two', 'eighty-three', 'eighty-four', 'eighty-five', 'eighty-six', 'eighty-seven', 'eighty-eight', 'eighty-nine', 'ninety', 'ninety-one', 'ninety-two', 'ninety-three', 'ninety-four', 'ninety-five', 'ninety-six', 'ninety-seven', 'ninety-eight', 'ninety-nine', 'one hundred'];
    var score = 0;
    var level = 1;
    var randomNumber;

    function generateNumber() {
        if (level === 1) {
            randomNumber = Math.floor(Math.random() * 21);
        } else if (level === 2) {
            randomNumber = Math.floor(Math.random() * 50) + 21;
        } else if (level === 3) {
            randomNumber = Math.floor(Math.random() * 31) + 70;
        }
        document.getElementById('number').innerText = randomNumber;
    }

    function checkNumber() {
        var input = document.getElementById('input').value;
        if (input === numbersInEnglish[randomNumber]) {
            document.getElementById('message').innerText = '¡Correcto!';
            score++;
            document.getElementById('score').innerText = 'Puntuación: ' + score;
            if (score % 5 === 0 && level < 3) {
                level++;
            }
        } else {
            document.getElementById('message').innerText = 'Inténtalo de nuevo.';
        }
    }

    function nextNumber() {
        document.getElementById('input').value = '';
        document.getElementById('message').innerText = '';
        generateNumber();
    }

    generateNumber();
</script>

</body>
</html>