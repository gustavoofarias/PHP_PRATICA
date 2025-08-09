<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de um número</title>
    <style>
        /* -------- RESET BÁSICO -------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 1.8rem;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
        }

        button {
            background: #6a11cb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #2575fc;
        }

        .resultado {
            background: #f3f3f3;
            margin: 8px 0;
            padding: 8px;
            border-radius: 6px;
            font-size: 1rem;
            color: #333;
            animation: aparecer 0.5s ease;
        }

        /* Animação suave na exibição dos resultados */
        @keyframes aparecer {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabuada de um número</h1>
        <form action="" method="POST">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" required>
            <br><br>
            <button type="submit">Calcular</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = (float)$_POST['numero'];

                for($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<div class='resultado'>$numero × $i = $resultado</div>";
                }
            }
        ?>
    </div>
</body>
</html>
