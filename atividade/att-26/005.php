<?php 
    include "geral.php";
    // function inputNum($string=''){
    //     $input = floatval(trim(readline($string)));
    //     return $input;
    // }

    // function calculaIdade($ano, $timezone="America/Sao_Paulo"){
    //     date_default_timezone_set($timezone);
    //     $ano_atual = date("Y");
    //     return $ano_atual - $ano;
    // }


    //  EXE - 5
    $anoNasc = inputNum("Informe o seu ano de nascimento: ");
    echo "Você tem " . calculaIdade($anoNasc) . " anos.";




?>