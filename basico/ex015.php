<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $metros = (float)$_POST['metros'];

    $centimetros = $metros * 100;

    echo "<div class='resultado'>A conversão de metros para centímetros dá: <strong>$centimetros</strong></div>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
            flex-direction: column;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #1a73e8;
            margin-bottom: 20px;
            font-size: 2.5em;
            font-weight: 600;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        
        label {
            display: none;
        }

        input[type="number"] {
            padding: 15px;
            font-size: 1.1em;
            border: 2px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        input[type="number"]:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 8px rgba(26, 115, 232, 0.2);
            outline: none;
        }

        button {
            padding: 15px;
            background-color: #1a73e8;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #155bb5;
        }

        .resultado {
            margin-top: 25px;
            font-size: 1.5em;
            background-color: #e8f0fe;
            padding: 20px;
            border-radius: 8px;
            color: #004d40;
            border-left: 5px solid #1a73e8;
        }

        .resultado strong {
            color: #00796b;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor</h1>
        <form action="ex015.php" method="post">
            <div>
                <label for="metros">Valor em Metros:</label>
                <input type="number" name="metros" id="metros" placeholder="Digite o valor em metros" required step="0.01">
                <button type="submit">Converter</button>
            </div>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $metros = (float)$_POST['metros'];
                $centimetros = $metros * 100;
                echo "<div class='resultado'>A conversão de **$metros** metros para centímetros dá: <strong>$centimetros</strong> cm</div>";
            }
        ?>
    </div>
</body>
</html>