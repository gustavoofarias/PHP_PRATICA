<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
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
            font-size: 1.2em;
        }

        input[type="number"] {
            padding: 8px;
            margin: 10px 0;
            width: 100%;
            max-width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #5a67d8;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #434190;
        }

        .resultado {
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2em;
            color: #2d3748;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Par ou Ímpar</h1>
        <form action="" method="post">
            <label for="numero">Número:</label><br>
            <input type="number" id="numero" name="numero" required><br>
            <button type="submit">Verificar</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = (float)$_POST['numero'];
                if ($numero % 2 == 0) {
                    echo "<div class='resultado'>O número <strong>$numero</strong> é <span style='color: green;'>PAR</span>.</div>";
                } else {
                    echo "<div class='resultado'>O número <strong>$numero</strong> é <span style='color: red;'>ÍMPAR</span>.</div>";
                }
            }
        ?>
    </div>

</body>
</html>
