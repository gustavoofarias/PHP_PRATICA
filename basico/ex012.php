<?php
$media = null;
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = isset($_POST["numero1"]) ? (float)$_POST["numero1"] : 0;
    $numero2 = isset($_POST["numero2"]) ? (float)$_POST["numero2"] : 0;
    $numero3 = isset($_POST["numero3"]) ? (float)$_POST["numero3"] : 0;

    $media = ($numero1 + $numero2 + $numero3) / 3;
    $mediaFormatada = number_format($media, 2);

    if ($media >= 6) {
        $resultado = "<div class='resultado'>Você foi <strong>aprovado!</strong> Sua média é: $mediaFormatada</div>";
    } else {
        $resultado = "<div class='resultado'>Você foi <strong>reprovado!</strong> Sua média é: $mediaFormatada</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Média de 3 notas</title>
    <style>
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 8px;
            font-size: 18px;
        }
        div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Média de 3 notas</h1>
    <form action="ex012.php" method="post">
        <div>
            <label for="numero1">Nota 1:</label>
            <input type="number" name="numero1" id="numero1" step="any" required>
        </div>
        <div>
            <label for="numero2">Nota 2:</label>
            <input type="number" name="numero2" id="numero2" step="any" required>
        </div>
        <div>
            <label for="numero3">Nota 3:</label>
            <input type="number" name="numero3" id="numero3" step="any" required>
        </div>
        <button type="submit">Calcular média</button>
    </form>

    <?php
    if ($media !== null) {
        echo $resultado;
    }
    ?>
</body>
</html>
