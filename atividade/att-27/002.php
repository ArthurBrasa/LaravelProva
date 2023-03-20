<?php 

    function maiorValor($num1, $num2) {
        if($num1 > $num2) {
            return $num1;
        }
        return $num2;
    }

    $num1 = floatval(trim(readline("Digite um número: ")));
    $num2 = floatval(trim(readline("Digite um número: ")));

    echo "Maior Valor: " . maiorValor($num1, $num2);

?>