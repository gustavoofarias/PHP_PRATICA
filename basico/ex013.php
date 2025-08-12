<?php
    $fahrenheit = null;

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Temperatura"])){
        $temperatura = (float)$_POST["Temperatura"];
        $fahrenheit = ($temperatura * 1.8) + 32;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
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
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #e9ecef;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            display: <?php echo ($fahrenheit !== null) ? 'block' : 'none'; ?>;
        }
        .resultado strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor de Temperatura</h1>

        <form action="ex013.php" method="post">
            <div>
                <label for="Temperatura">Temperatura em Celsius:</label>
                <input type="number" name="Temperatura" id="Temperatura" step="0.01" required>
            </div>
            <button type="submit">Converter</button>
        </form>

        <?php if ($fahrenheit !== null): ?>
            <div class="resultado">
                A temperatura em Fahrenheit é: <strong><?php echo number_format($fahrenheit, 2); ?>°F</strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>