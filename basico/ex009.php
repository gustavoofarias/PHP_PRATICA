<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 1 a N</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #5563DE;
            margin-bottom: 20px;
        }
        label {
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: block;
            color: #444;
        }
        input {
            padding: 10px;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }
        input:focus {
            border-color: #5563DE;
        }
        button {
            background: #5563DE;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #4350c4;
        }
        .resultado {
            margin-top: 20px;
            background: #f0f3ff;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
            box-shadow: inset 0 0 5px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Soma de 1 a N</h1>

        <form action="" method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" required>
            <button type="submit">Aperte o botão</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = (float)$_POST['numero'];
            $soma = 0;
            $numeros = [];

            for ($i = 1; $i <= $numero; $i++) {
                $soma += $i;
                $numeros[] = $soma;
            }

            echo "<div class='resultado'>A soma de 1 até $numero = " . implode(", ", $numeros) . "</div>";
        }
        ?>
    </div>
</body>
</html>
