<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $idade = (float)$_POST['Idade'];

    if($idade >= 0 && $idade <= 12){
        echo "<div class=resultado> A criança tem $idade anos. </div>";
    }elseif($idade >= 13 && $idade <= 17){

        echo "<div class=resultado> O adolescente tem $idade anos. </div>";
    }elseif($idade >= 18 && $idade <= 59){
        echo "<div class=resultado> O adulto tem $idade anos. </div>";
    } elseif ($idade > 60) {
        echo "<div class=resultado> O idoso tem $idade anos. </div>";
    } else {
        echo "<div class=erro> Idade inválida. </div>";
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Idade</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form div {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            color: #555;
            text-align: left;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #d4edda;
            color: #155724;
            font-size: 18px;
            font-weight: bold;
        }
        .erro {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #f8d7da;
            color: #721c24;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificador de Idade</h1>
        <form action="ex014.php" method="post">
            <div>
                <label for="Idade">Digite a idade:</label>
                <input type="number" name="Idade" id="Idade" required>
            </div>
            <button type="submit">Verificar</button>
        </form>
    </div>
</body>
</html>