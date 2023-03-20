
<?php 

    function sumTwoNumber($num1, $num2){
        return $num1 + $num2;
    }

    $num1 = readline("digite um número [1]: ");
    $num2 = readline("digite um número [2]: ");

    echo "A soma dos números é: ".sumTwoNumber($num1, $num2);

    
?>