<?php 


    function fahrenheitToCelsius($fahrenheit){
        return (5 * ($fahrenheit-32) / 9);
    }
    

    echo "Digite a temperatura em Fahrenheit: ";
    $temperature = readline();

    echo "A temperatura em Celsius é: ".number_format(fahrenheitToCelsius($temperature), 2);

?>