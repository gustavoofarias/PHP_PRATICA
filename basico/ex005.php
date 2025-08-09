<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6dd5fa, #2980b9);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            outline: none;
            transition: border 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #2980b9;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 12px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background-color: #1f6391;
        }
        .resultado {
            margin-top: 20px;
            padding: 12px;
            background-color: #dff0d8;
            color: #3c763d;
            font-weight: bold;
            border-radius: 8px;
            border: 1px solid #3c763d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora Simples</h1>
        <form action="" method="post">
            <div>
                <label for="numero1">Número:</label>
                <input type="number" name="numero1" id="numero1" required>
            </div>

            <div>
                <label for="operacao-select">Operação:</label>
                <select name="operacao" id="operacao-select" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>

            <div>
                <label for="numero2">Número:</label>
                <input type="number" name="numero2" id="numero2" required>
            </div>

            <button type="submit">Calcular</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = (float)$_POST['numero1'];
                $numero2 = (float)$_POST['numero2'];
                $operacao = $_POST['operacao'];

                if($operacao == '+') {
                    $calculo = $numero1 + $numero2;
                    echo "<div class='resultado'>A soma de $numero1 + $numero2 é: $calculo</div>";
                } elseif($operacao == '-') {
                    $calculo = $numero1 - $numero2;
                    echo "<div class='resultado'>A subtração de $numero1 - $numero2 é: $calculo</div>";
                } elseif($operacao == '*') {
                    $calculo = $numero1 * $numero2;
                    echo "<div class='resultado'>A multiplicação de $numero1 × $numero2 é: $calculo</div>";
                } elseif($operacao == '/') {
                    if($numero2 == 0) {
                        echo "<div class='resultado' style='background-color:#f8d7da;color:#721c24;border:1px solid #721c24;'>Erro: divisão por zero</div>";
                    } else {
                        $calculo = $numero1 / $numero2;
                        echo "<div class='resultado'>A divisão de $numero1 ÷ $numero2 é: $calculo</div>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>
