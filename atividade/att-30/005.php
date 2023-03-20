<?php 
    function calculateAge($yearOfBirth){
        $currentYear = date("Y");
        return $currentYear - $yearOfBirth;
    }

    echo "Informe seu ano de nascimento: ".PHP_EOL;
    $yearOfBirth = readline();

    echo "Sua idade é : ".calculateAge($yearOfBirth);
?>