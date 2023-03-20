<?php 

    function calcMedia($notas){
        return array_sum($notas)/count($notas);
    }
    echo "Calculando Média".PHP_EOL;

    
    $arrNotas = [];
    for($i = 0; $i < 3;$i++){
        array_push($arrNotas, floatval(trim(readline("Nota - $i : "))));
    }

    $mediaFinal = calcMedia($arrNotas);
    echo "Média Final: ". number_format($mediaFinal, 2, ",", ".") .PHP_EOL;

    echo "Situação: ";
    if($mediaFinal >= 7){
        echo "Aprovado".PHP_EOL;
    }else if($mediaFinal >= 5.1 && $mediaFinal <= 6.9){
        echo "Recuperação".PHP_EOL;
    }else {
        echo "Reprovado".PHP_EOL;
    }

?>