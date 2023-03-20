<?php 
    include "geral.php";
    // function inputNum($string=''){
    //     $input = floatval(trim(readline($string)));
    //     return $input;
    // }


    // EXE - 9
    $salarioFixo = 500;
    $softwaresVendidosNoMes = inputNum("Vendas Totais do Mês: ");
    $salarioFinal = $salarioFixo + ($softwaresVendidosNoMes * 50);
    echo "O seu salario do mês de ". date("M"). " é de $salarioFinal reais.";



?>