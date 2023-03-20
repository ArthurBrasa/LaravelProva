<?php 
    include "geral.php";
    // function inputNum($string=''){
    //     $input = floatval(trim(readline($string)));
    //     return $input;
    // }

    // function mediaAritmetrica(...$notas){
    //     $soma = 0;
    //     foreach ($notas as $n => $nota) {
    //         $soma += $nota;
    //     }
    //     return $soma/count($notas);
    // }



    // EXE - 3
    $notas = [];
    for($i = 0; $i < 4 ; $i++) {
        array_push($notas, inputNum());
    }
    echo mediaAritmetrica($notas[0], $notas[1],$notas[2], $notas[3]);    


?>