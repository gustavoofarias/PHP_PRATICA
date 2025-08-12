

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Verificador de ano bissexto</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #222;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            margin-bottom: 24px;
            color: #34495e;
            font-weight: 700;
            font-size: 1.8rem;
        }

        form div {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #34495e;
            font-size: 1rem;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 14px;
            font-size: 1rem;
            border: 2px solid #66a6ff;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #2980b9;
            box-shadow: 0 0 8px rgba(41, 128, 185, 0.4);
        }

        button {
            width: 100%;
            padding: 12px 0;
            font-size: 1.1rem;
            background: #2980b9;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background: #1c5980;
        }

        .resultado {
            margin-top: 20px;
            padding: 15px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.2rem;
            color: #fff;
            /* cor dinâmica via classe */
        }

        .bissexto {
            background-color: #27ae60; /* verde */
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.5);
        }

        .nao-bissexto {
            background-color: #c0392b; /* vermelho */
            box-shadow: 0 4px 15px rgba(192, 57, 43, 0.5);
        }

        /* Responsividade simples */
        @media (max-width: 450px) {
            .container {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificador de ano bissexto</h1>
        <form action="" method="post">
            <div>
                <label for="numero">Ano:</label>
                <input type="number" name="numero" id="numero" required min="1" />
            </div>
            <button type="submit">Verificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ano = (int) $_POST["numero"];
            if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
                echo "<div class='resultado bissexto'>O ano $ano é bissexto!</div>";
            } else {
                echo "<div class='resultado nao-bissexto'>O ano $ano não é bissexto!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
