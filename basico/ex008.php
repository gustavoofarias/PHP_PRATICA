<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fatorial</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #1e40af;
        }
        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type=number] {
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline-color: #1e40af;
            width: 100%;
        }
        button {
            padding: 12px;
            background-color: #1e40af;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1.1rem;
        }
        button:hover {
            background-color: #374b9d;
        }
        .resultado {
            margin-top: 25px;
            padding: 15px;
            background-color: #e0e7ff;
            border-left: 5px solid #1e40af;
            font-size: 1.1rem;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fatorial</h1>
        <form action="" method="post">
            <input type="number" name="numero" id="numero" min="0" required placeholder="Digite um número inteiro" />
            <button type="submit">Calcular Fatorial</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            // Verifica se é inteiro e >= 0
            if (!is_numeric($numero) || $numero < 0 || intval($numero) != $numero) {
                echo '<div class="resultado" style="color: red;">Por favor, digite um número inteiro não negativo.</div>';
            } else {
                $numero = intval($numero);

                if ($numero == 0 || $numero == 1) {
                    echo "<div class='resultado'>O fatorial de $numero é: 1</div>";
                } else {
                    $fatorial = 1;
                    $passos = [];

                    for ($i = $numero; $i >= 1; $i--) {
                        $fatorial *= $i;
                        $passos[] = $i;
                    }

                    // Monta string da multiplicação: ex: 5 x 4 x 3 x 2 x 1
                    $multiplicacao = implode(" × ", $passos);

                    echo "<div class='resultado'>";
                    echo "Cálculo: $multiplicacao = <strong>$fatorial</strong>";
                    echo "</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
