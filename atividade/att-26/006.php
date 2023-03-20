<?php 
    include "geral.php";
    // function inputNum($string=''){
    //     $input = floatval(trim(readline($string)));
    //     return $input;
    // }

    // function areaTriangulo($base, $altura) {
    //     return ($base * $altura)/2;
    // }

    // EXE - 6
    echo "Calculando área do tringulo".PHP_EOL;
    echo "Area do triangulo: " . areaTriangulo(inputNum("Base: "), inputNum("Altura: "));

?>