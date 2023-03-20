<?php 
    include "geral.php";
    // function inputNum($string=''){
    //     $input = floatval(trim(readline($string)));
    //     return $input;
    // }

    // EXE - 8
    $saldo = 500;
    echo "Calculando Salario".PHP_EOL;
    echo "Saldo atual: $saldo".PHP_EOL;
    $cheque = inputNum("Informe valor do cheque:");
    $saldo += $cheque;
    echo "Novo saldo ". $saldo;

    



?>