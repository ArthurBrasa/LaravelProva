<?php  
    
    function mediaNotas($arrNotas){
        return array_sum($arrNotas)/count($arrNotas);
    }

    function getNotas($rangeNotas){
        $arrNotas = [];
        $rangeNotas += 1;
        for ($i = 1; $i < $rangeNotas; $i++){
            $nota = floatval(trim(readline("Nota - $i: ")));
            array_push($arrNotas, $nota);
        }

        return $arrNotas;
    }


    $mediaNotas = mediaNotas(getNotas(4));
    echo "Média: ". number_format($mediaNotas, 2, ",", ".").PHP_EOL;
    
    echo "Situação: ";
    if($mediaNotas>=6){
        echo "Aprovado".PHP_EOL;
    }else{
        echo "Reprovado".PHP_EOL;
    }


?>