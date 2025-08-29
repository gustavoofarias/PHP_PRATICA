<?php

function contador_vogal($string){
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    
    // Transformar tudo em minúsculo para não perder maiúsculas
    $string = strtolower($string);
    
    // Percorrer cada caractere da string
    for ($i = 0; $i < strlen($string); $i++){
        if (in_array($string[$i], $vogais)){
            $contador++;
        }
    }

    return "Essa string tem $contador vogais.";
}

$teste = contador_vogal("Gustavo Farias");

echo $teste;

?>
