<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Dois Números em PHP</title>
    <style>
        body { font-family: sans-serif; max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .resultado { margin-top: 20px; font-weight: bold; font-size: 1.2em; }
    </style>
</head>
<body>

    <h1>Calculadora de Soma</h1>

    <form action="ex002.php" method="post">
        <label for="numero1">Primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <button type="submit">Somar</button>
    </form>

    <?php
        // 1. Verifica se o formulário foi enviado (se os dados chegaram via método POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // 2. Pega os valores dos campos do formulário
            // Usamos (float) para garantir que os valores sejam tratados como números (inteiros ou decimais)
            $numero1 = (float)$_POST['numero1'];
            $numero2 = (float)$_POST['numero2'];

            // 3. Calcula a soma
            $soma = $numero1 + $numero2;

            // 4. Exibe o resultado na tela
            echo "<div class='resultado'>A soma de $numero1 + $numero2 é: $soma</div>";
        }
    ?>

</body>
</html>