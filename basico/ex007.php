<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de 1 a 100</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .resultado {
            background: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
            font-size: 18px;
            transition: transform 0.2s ease-in-out;
        }

        .resultado:hover {
            transform: scale(1.1);
            background: #45a049;
        }
    </style>
</head>
<body>
    <h1>Contagem de 1 a 100</h1>

    <div class="container">
        <?php
            $numero = 0;
            while ($numero < 100) {
                $numero++;
                echo "<div class='resultado'> $numero </div>"; 
            }
        ?>
    </div>
</body>
</html>
