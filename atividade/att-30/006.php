<?php 

    function calculateArea($base, $height){
        return ($base*$height)/2;
    }

    echo "Informe as dimenções do triangulo".PHP_EOL;
    $base = readline("Base: ");
    $height = readline("Altura: ");

    echo "A área do triangulo é: ".calculateArea($base, $height);



?>