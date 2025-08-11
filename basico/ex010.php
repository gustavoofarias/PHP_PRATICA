<?php

$pares = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }
}

echo "
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .resultado {
        background: white;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 500px;
        font-size: 16px;
        line-height: 1.5;
    }
    .resultado strong {
        color: #007BFF;
    }
</style>
<div class='resultado'>
    <strong>Os números pares de 1 a 100 são:</strong><br>
    " . implode(" • ", $pares) . "
</div>
";

?>
