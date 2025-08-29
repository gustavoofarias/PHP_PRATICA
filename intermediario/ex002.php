<?php

function palindromo($palavra) {
    // Ignora maiúsculas/minúsculas
    $palavra = strtolower($palavra);

    if ($palavra == strrev($palavra)) {
        return "É um palíndromo";
    } else {
        return "Não é um palíndromo";
    }
}

$teste = palindromo('Arara');

echo $teste;
?>
