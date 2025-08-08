<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior entre dois números</title>
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        label {
            font-size: 1.1em;
        }

        input[type="number"] {
            padding: 8px;
            margin: 10px;
            width: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #3182ce;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2b6cb0;
        }

        .resultado {
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Maior entre dois números</h1>
        <form method="post">
            <label for="numero1">Número 1:</label>
            <input type="number" id="numero1" name="numero1" required>
            <br>
            <label for="numero2">Número 2:</label>
            <input type="number" id="numero2" name="numero2" required>
            <br>
            <button type="submit">Verificar</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = (float)$_POST['numero1'];
                $numero2 = (float)$_POST['numero2'];

                if ($numero1 > $numero2) {
                    echo "<div class='resultado'>O número <strong>$numero1</strong> é maior que o <strong>$numero2</strong>.</div>";
                } elseif ($numero1 < $numero2) {
                    echo "<div class='resultado'>O número <strong>$numero1</strong> é menor que o <strong>$numero2</strong>.</div>";
                } else {
                    echo "<div class='resultado'>Os números são iguais.</div>";
                }
            }
        ?>
    </div>
</body>
</html>
